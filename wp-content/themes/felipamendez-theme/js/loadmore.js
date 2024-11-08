let currentPage = 1;
function loadMore(element, category, template) {

  currentPage++; // Do currentPage + 1, because I want to load the next page
  console.log(category)
  console.log(currentPage)
  console.log(template)

  $.ajax({
    type: 'POST',
    url: '/wp-admin/admin-ajax.php',
    dataType: 'html',
    data: {
      action: 'load_more',
      paged: currentPage,
      category: category,
      template: template,
    },
    success: function (res) {
      if(res) {
        //$('.post-list').append(res);
        $(element).parents('.load_more').siblings('.post-list').append(res);
        
        // console.log("the newest of files")
      } else {
         // $(element).parents('.load_more').hide();
         let noResponseError = "<div class='row justify-content-center'><div class='col-auto'><span style='display:inline-block;font-size:14px;' class='mt-4'>Showing all results</span></div></div>"
        $('#errorContainer').html(noResponseError);
        // console.log(noResponseError)
        // console.log("this is fixed")
        
      }
    }
  });
};