var dashboard_loader_overlay = '<div class="ced_overlay"><div class="ced_overlay__inner"><div class="ced_overlay__content"><div class="ced_ebay_page-loader-indicator ced_overlay_loader"><svg class="ced_amazon_overlay_spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div><div class="ced_ebay_page-loader-info"><p class="ced_ebay_page-loader-info-text" id="ced_ebay_progress_text">Loading...</p><p class="ced_ebay_page-loader-info-text" style="font-size:19px;" id="ced_ebay_countdown_timer"></p></div></div></div></div>';
const url = window.location.href;
const urlParams = new URLSearchParams(url);
var current_user = '';

sessionStorage.setItem("offsets", []);
	
$(document).ready(
    function(){
        //subscriptionEXpirationMail();
        let exist = url.search('be_pages_dashboard');
        if( exist > 0 ){
            console.log('dfgb');
            let q;
            $("#js-chartjs-dashboard-lines").before('<p class="new_canvas"></p>');
            let p = document.getElementById("js-chartjs-dashboard-lines");
            $(p).remove();
            $(".new_canvas").after('<canvas id="updated_canvas" ></canvas>');
            prepareFreeTrialToConversionGraph();
        }
        
    }
)


$( document ).ready(function() {
    console.log( "ready!" );
});

$(document).on('click', '.test', function(){
    console.log('dfgb');
    let q;
    $("#js-chartjs-dashboard-lines").before('<p class="new_canvas"></p>');
    let p = document.getElementById("updated_canvas");
    $(p).remove();
    $(".new_canvas").after('<canvas id="updated_canvas" ></canvas>');
    prepareFreeTrialToConversionGraph();
})


$(document).on('click', '#conversion_filter', function(){
    console.log('dfgb');
    let q;
    $("#js-chartjs-dashboard-lines").before('<p class="new_canvas"></p>');
    let p = document.getElementById("updated_canvas");
    $(p).remove();
    $(".new_canvas").after('<canvas id="updated_canvas" ></canvas>');
    prepareFreeTrialToConversionGraph();
})

jQuery(document).on("click", "#dashboard_date_filters", function(){
  
    console.log('dfgb');
    let q;
    $("#js-chartjs-dashboard-lines").before('<p class="new_canvas"></p>');
    let p = document.getElementById("updated_canvas");
    $(p).remove();
    $(".new_canvas").after('<canvas id="updated_canvas" ></canvas>');
    prepareFreeTrialToConversionGraph();
  
})


function prepareFreeTrialToConversionGraph(){

    let end_date = $('#endDate').val();
    let start_date = $('#startDate').val();
    let conversion  = $('#conversion_filter').val(); 

    $.ajax({
        type: "POST",
        url: 'dashboardAjax.php',
        data: {
          function: 'graphFilter',
          end_date : end_date,
          start_date : start_date,
          conversion : conversion
        },
        success: function(response){
            console.log(response);
            let resp = JSON.parse(response);
            console.log(resp)
            let a = document.getElementById("updated_canvas");
            q = new Chart( a, {
                type: "line",
                data: {
                        labels: resp.keys,
                        datasets: [{
                                label: "This Week",
                                fill: !0, backgroundColor: "rgba(2, 132, 199, .45)",
                                borderColor: "rgba(2, 132, 199, 1)",
                                pointBackgroundColor: "rgba(2, 132, 199, 1)",
                                pointBorderColor: "#fff",
                                pointHoverBackgroundColor: "#fff",
                                pointHoverBorderColor: "rgba(2, 132, 199, 1)",
                                data: resp.values
                            }]
                        
                    },
                options: {
                    tension: .4,
                    scales: {
                        y: {
                            suggestedMin: 0,
                            suggestedMax: 50
                        }
                    },
                    interaction: {
                        intersect: !1
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function (e) { return " " + e.parsed.y + " Sales" }
                            }
                        }
                    }
                }
            })
            
        }
    });

  


}


$(document).on('click','.customer_table',function(e){

    $('#page-overlay').remove();
    let section = $(document).find('table').attr('id');
    // let cls = $('#page-container').hasClass('side-overlay-o');
    // console.log(cls)

    // if( cls ){
    //     return;
    // }
    // console.log(cls);

    // if( cls !== undefined ){
    //     let exist = cls.search('email-modal');
    //     console.log(exist)
    //     if( exist && exist !== -1 ){
    //         console.log('return')
    //         return;
    //     }
    // }

    let id =  $(this).attr('id');
    // let url = new URL( window.location.href );
    let queryParams = new URLSearchParams(window.location.search);

    queryParams.set('id', id);
    history.replaceState(null, null, "?" + queryParams.toString());

   // $('#page-footer').find('#side-overlay').remove();
    // $('#content').find('#side-overlay').remove();;

    $.ajax({
        type: "POST",
        url: 'ajax.php',
        data: {
            id: id,
            section: section
        },
        success: function(response)
        {
            console.log($(document).find('#side-overlay').length );
            console.log(response)
            if( ! $(document).find('#side-overlay').length){
                $('#page-container').prepend(response);
                $('#page-container').prepend('<div id="page-overlay"></div>');
                $(document).find('#side-overlay').addClass('custom-side-overlay');

                $('#page-overlay').css({'transform':'initial','opacity':'1'})
                

                // $('#side-overlay').css('display', 'block');
            }
            
            // var jsonData = JSON.parse(response);

            // // user is logged in successfully in the back-end
            // // let's redirect
            // if (jsonData.success == "1")
            // {
            //     location.href = 'my_profile.php';
            // }
            // else
            // {
            //     alert('Invalid Credentials!');
            // }
       }
    });

})

$('.email-modal').click( function(e){

    // console.log(cls)
    current_user = $(this).attr('id');
    console.log(current_user);

})


$(document).on('click', '.remove_sidebar', function(){

    $('#page-container').removeClass('side-overlay-o');
    // $('#side-overlay').css('opacity', '0');
    $('#page-overlay').css({'transform':'translateX(100%)','opacity':'0'})
    $('#page-container').find('#side-overlay').remove();
})

$(document).on('click', '.send-email', function(){

    let id =  $(this).attr('id');
    console.log(current_user)
    let subject = $('.mail-subject').val();
    let content = $('.mail-content').val();

    if( '' == subject || '' == content ){
        $('.mail-body').prepend('<div class="alert alert-danger" role="alert"><p class="mb-0">Please fill all required fields</p></div>');
        setTimeout( function(){
            $('.alert').remove();
        },3000)
        return;
    }

    $.ajax({
        type: "POST",
        url: 'mail.php',
        data: {
            id: id,
            subject: subject,
            content: content
        },
        success: function(response)
        {
            // console.log(response);
            //$('.content').append(response);
            
        }
    });

})

function side_overlay_close(){
    console.log('gfhythtydhtd')
    self._lPage.classList.remove('side-overlay-o');
}



// function updateConfigByMutating(chart) {
//     console.log('gfhbfghnf c')
//     chart.options.plugins.title.text = 'new title';
//     chart.update();
// }

function subscriptionEXpirationMail(){
    console.log('gmvh')
    setInterval( function(){

        $.ajax({
            type: "POST",
            url: 'automaticMail.php',
            success: function(response)
            {
                console.log(response);
                //$('.content').append(response);
                
            }
        });
         
    },1000000)
}


jQuery(document).on("change", "#per_page", function (event){

    let section = $('.ced-filter-all-wrapper').attr('id');
    tableAjax(section,'')

})


jQuery(document).on("click", ".ced_table_pagination", function (event) {

    let section = $('.ced-filter-all-wrapper').attr('id');
    let cls = $(this).attr('class');

    tableAjax(section,cls)

})

jQuery(document).on("click", "#apply_head_filters", function(event) {

    let filters = {};

    filters['key']   = $('#head_filter_key').val(); 
    filters['value'] = $('#table_filters').val();

    if( filters.key.length == 0 || filters.value.length == 0 ){
        $('#content').prepend('<div class="alert alert-danger d-flex align-items-center justify-content-between" role="alert"><p class="mb-0"> Please Select filters key and value</p></div>')
        setTimeout( function(){
            $('.alert').remove();
        },3000)
        return;
    }

    let section = $('.ced-filter-all-wrapper').attr('id');
    // let pageNum = $('.current-page').val();
    tableAjax(section,'')

})


function tableAjax(section,cls) {

    console.log( section )
    let filters = {};

    filters['key']   = $('#head_filter_key').val(); 
    filters['value'] = $('#table_filters').val();

    let prev_off = $('.previous-page').attr('id');
    let nxt_off = $('.next-page').attr('id');

    // if (section == 'product') {
    //     filters['title'] = $('.ced-filter-all-wrapper').find('#filter_title').is(':checked');
    //     filters['order'] = $('.ced-filter-all-wrapper').find('#filter_order').is(':checked');
    //     filters['rctl_created'] = $('.ced-filter-all-wrapper').find('#filter_rctl_created').is(':checked');
    //     filters['status'] = $('.ced-filter-all-wrapper').find('#filter_status').is(':checked');
    // }

    // if (section == 'order') {
    //     filters['qty_purchased'] = $('.ced-filter-all-wrapper').find('#filter_qty_purchased').is(':checked');
    //     filters['rctl_created'] = $('.ced-filter-all-wrapper').find('#filter_rctl_created').is(':checked');
    //     filters['amount_paid'] = $('.ced-filter-all-wrapper').find('#filter_amount_paid').is(':checked');
    //     filters['order'] = $('.ced-filter-all-wrapper').find('#filter_order').is(':checked');
    // }

   // console.log(section, filters);
    jQuery('#wpbody-content').append(dashboard_loader_overlay);

    // let woo_user_id = urlParams.get('user_id');
    // let ebay_user_id = urlParams.get('ebay_user_id');

    let per_page   = $('#per_page').val();
    // let start_date = $('#start_date').val();
    // let end_date   = $('#end_date').val();
    // let order_status = $('#order_status').val();

    $.ajax({
        url: 'dashboardAjax.php',
        type: 'post',
        dataType: 'html',
        data: {
            // ajax_nonce: ajaxNonce,
            // woo_user_id: woo_user_id,
            // ebay_user_id: ebay_user_id,
            // start_date: start_date,
            // end_date: end_date,
            //order_status: order_status,
            per_page: per_page,
            filters: filters,
            section: section,
            dataType: 'html',
            function: 'tableFilters',
            prev_off: prev_off,
            nxt_off: nxt_off,
            cls: cls
            
        },
        success: function (response) {
            // jQuery('#wpbody-content .ced_overlay').remove();
            // console.log(response);
            response = JSON.parse(response);
            // console.log(response.html)
            // $('.ced_filter_table_body').html('');
            // $('.ced_filter_table_body').html(response.);

            $(document).find('table').find('tbody').children().remove(); 
            $(document).find('table').find('tbody').append(response.html); 
            $(document).find('.previous-page').attr( 'id', response.previousOffset)
            $(document).find('.next-page').attr( 'id' , response.nextOffset)

            if( response.nextOffset.length == 0 ){
                $('.next-page').attr('disabled', 'disabled');
            } else{
                $('.next-page').removeAttr('disabled');
            }

            if( response.previousOffset.length == 0 ){
                $('.previous-page').attr('disabled', 'disabled');
            } else{
                $('.previous-page').removeAttr('disabled');
            }

            // $('.current-page').val(response.page);
            // $('.next-page').attr('id', parseInt(response.page + 1));
            // $('.total-pages').html(response.totalPages);
            // $('.displaying-num').html(response.totalItems);

            // if (response.page >= response.totalPages) {
            //     $('.last-page').attr('disabled', 'disabled');
            //     $('.next-page').attr('disabled', 'disabled');
            // }

            // if (response.page < response.totalPages) {
            //     $('.last-page').removeAttr('disabled');
            //     $('.next-page').removeAttr('disabled');

            //     $('.last-page').attr('id', parseInt(response.totalPages));
            //     $('.next-page').attr('id', parseInt(response.page + 1));

            // }

            // if (response.page >= 1 || (response.page - 1) == 0) {
            //     $('.previous-page').attr('disabled', 'disabled');
            //     $('.start-page').attr('disabled', 'disabled');
            // }

            // if (response.page > 1) {
            //     $('.previous-page').removeAttr('disabled');
            //     $('.start-page').removeAttr('disabled');

            //     $('.previous-page').attr('id', parseInt(response.page - 1));
            //     $('.start-page').attr('id', 1);
            // }




            // if( response.page == response.totalPages ){
            // 	$('.last-page').attr('disabled', 'disabled');
            // 	$('.next-page').attr('disabled', 'disabled');
            // }

        }
    })

}

jQuery(document).on("click", ".control-subscription", function(){

    console.log($(this).attr('class'))
    let subscription_data = {};
    subscription_data['pause']        = $('#pause-subs').is(':checked');
    subscription_data['customer_id']  = $('#pause-subs').attr('attrCustomerId');
    subscription_data['delete']       = $('#delete-subs').is(':checked');

    $.ajax({
        type: "POST",
        url: 'dashboardAjax.php',
        data: {
          function: 'controlCustomerSubscription',
          subscription_data : subscription_data,
        },
        success: function(response){
            console.log(response);
            $('#side-overlay').find('.control-subscription').prepend(response);
            
        }
    });

    
})


jQuery(document).on("click", "#preparePlan", function(event){
    // event.preventDefault()
    // console.log('opp')
    var form = $(document).find('.needs-validation');
    let desiredform = form[0];
    console.log(desiredform.checkValidity())
    if (!desiredform.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
    }

    desiredform.classList.add('was-validated');
    let planData = $('form').serialize();;
    console.log(planData)

    $.ajax({
        type: "POST",
        url: 'dashboardAjax.php',
        data: {
          function: 'preparePlan',
          planData : planData,
        },
        success: function(response){
            console.log(response);
            //$('.content').append(response);
            
        }
    });

})


jQuery(document).on("click", "#subscription_head_filters", function(event) {

    let marketplace   = $('#marketplace').val(); 
    let customer_id   = $('#customer_id').val(); 
   
    if( marketplace.length == 0 && customer_id.length == 0){
        $('#content').prepend('<div class="alert alert-danger d-flex align-items-center justify-content-between" role="alert"><p class="mb-0"> Please Select Marketplace or enter customer ID</p></div>')
        setTimeout( function(){
            $('.alert').remove();
        },3000)
        return;
    }

    let section = $('.subs_head_filters').attr('id');
    let pageNum = $('.current-page').val();
    tableHeadFiltersAjax(section, pageNum)

})


jQuery(document).on("click", "#customer_head_filters", function(event) {

    let key   = $('#cust_head_filters_key').val(); 
    let value = $('#cust_head_filters_value').val(); 
   
    if( key.length == 0 || value.length == 0 ){
        $('#content').prepend('<div class="alert alert-danger d-flex align-items-center justify-content-between" role="alert"><p class="mb-0"> Please Select filters key and value</p></div>')
        setTimeout( function(){
            $('.alert').remove();
        },3000)
        return;
    }

    let section = $('.cust_head_filters').attr('id');
    let pageNum = $('.current-page').val();
    tableHeadFiltersAjax(section, pageNum)

})


function tableHeadFiltersAjax( section, pageNum ){

   
    let marketplace   = $('#marketplace').val(); 
    let per_page   = $('#per_page').val();    
    let key   = $('#cust_head_filters_key').val(); 
    let value = $('#cust_head_filters_value').val(); 
    let customer_id   = $('#customer_id').val(); 
    

    $.ajax({
        type: "POST",
        url: 'dashboardAjax.php',
        data: {
          function: 'headFilter',
          marketplace : marketplace,
          key : key,
          value : value,
          per_page: per_page,
          customer_id: customer_id,
          section: section
        },
        success: function(response){
            console.log(response);
            //$('.content').append(response);
            //if( section == 'subscriptions' ){
                console.log(section)
                $(document).find('table').find('tbody').children().remove(); 
                $(document).find('table').find('tbody').append(response); 
            //}
            
        }
    });

}
