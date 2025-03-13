<?php 
/* Template Name: Projects Home*/

get_header();

if (have_posts()) :

    while(have_posts()) :
        the_post();

        get_template_part('template-parts/content', get_post_type());

    endwhile;
    the_posts_navigation();

else :
    get_template_part('template-parts/content', 'none');
endif;
?>

<style>
    a.button-toggle {
        border-color: #6a0d83;
        color: #6a0d83;
    }

    a.button-toggle.active {
        border-color: #ee5d6c !important;
        color: #ee5d6c !important;
    }

    a.button-toggle:hover {
        color: #ee5d6c !important;
        border-color: #ee5d6c !important;
    }

    .post-list {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px; /* Adjust spacing between items */
        padding: 2rem;
    }

    .post-list article {
        display: flex;
        height: 100%;
        border: 1px solid #e0e0e0; /* Optional: gives each item a border */
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Optional shadow effect */
        padding: 3rem;
    }

    @media (max-width: 992px) {
    .post-list {
        grid-template-columns: repeat(2, 1fr);
    }
    }

    @media (max-width: 576px) {
        .post-list {
            grid-template-columns: 1fr;
        }
    }

    .pills {
        display: inline-block;
        padding: 3px 6px; /* Adjust padding for a balanced look */
        font-size: 0.875rem; /* Slightly smaller font for a neat pill look */
        font-weight: 500; /* Optional: medium font weight for readability */
        color: #005A8B; /* Text color */
        background-color: #E9EEFF; /* Background color */
        border-radius: 20px; /* Fully rounded for a pill shape */
        margin-right: 10px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    
    body {
        
        font-size: 16px;
        color: #333; 
        line-height: 1.6;
    }

    
    h1, h2, h3, h4, h5, h6 {
        color: #6a0d83 !important; 
    }

    h1 { font-size: 3.9rem; }
    h2 { font-size: 2rem; }
    h3 { font-size: 1.75rem; }
    h4 { font-size: 1.5rem; }
    h5 { font-size: 1.25rem; }
    h6 { font-size: 1rem; }

   
    a {
        color: #ee5d6c;
        text-decoration: none;
        font-weight: 500; 
        transition: color 0.3s ease;
    }

    a:hover {
        color: #fb9062;
        
    }

    /* Buttons (including .button-toggle) */
    a.button-toggle, button {
        
        font-weight: 600; /* Bold for better visibility */
        font-size: 2rem;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    /* Additional Styles for .button-toggle */
    a.button-toggle {
        border: 2px solid #2a99ff;
        color: #2a99ff;
    }

    a.button-toggle.active {
        border-color: #005A8B;
        color: #005A8B;
    }

    a.button-toggle:hover {
        color: #005A8B;
        border-color: #005A8B;
    }

    /* Article Titles */
    .post-list h2 {
        
        font-size: 1.8rem;
        color: #6a0d83 !important;
        margin-bottom: 0.5rem;
        padding-bottom: 0.5rem;
    }

    h2 > a {
        color: #fb9062 !important;
    }

    /* Text within articles (e.g., dates, pills) */
    .post-list p {
        font-size: 1.4rem;
        color: #555;
        margin-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    .pills {
        font-size: 0.9rem; /* Slightly smaller font for a compact look */
        margin-bottom: 0.5rem;
    }

    .post-list article p:last-child {
    align-self: flex-end; /* Aligns the "Read More" link to the bottom */
    font-weight: bold;
    color: #6a0d83;
    margin-top: 1rem; /* Optional: Adds spacing from content above */
    }

    .post-list article p:last-child a {
        color: inherit;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .post-list article > .col-12.col-lg-8 {
        flex: 1; 
    }

    .load_more .btn {
        background-color: #6a0d83; 
        border: none;
        color: white;
        font-size: 1.5rem;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); 
        border-radius: 9999px;
    }

    .load_more .btn:hover {
        background-color: #ce4993; 
        transform: scale(1.05); 
    }

    .load_more .btn:active {
        background-color: #6a0d83; 
        transform: scale(0.98); 
    }

    div.load_more {
        display: flex;
        justify-content: center;
    }

    #filter-container {
        display: flex;
        justify-content: center;
       
    }

    .wp-element-button {
        border-radius: 9999px !important;
    }

    .add-gap {
        display:flex;
        gap: 2rem;
        margin-bottom: 2rem;
    }



</style>

<div class="container-fluid il-reusable-block grid-article px-3 px-md-5 pb-6 pb-md-8">
    <div class="row mx-auto" style="max-width:1344px;">
        <div class="col-12 p-0">
        <h1 id="latest" class="h1 mb-5 mb-md-6">My Projects</h1>
            <div id="filter-container"> 
                <div style="font-size:15px !important;" class="add-gap wp-block-button mb-4 is-style-outline" data-block-type="core">
                    <a style="display:inline-block;font-size:15px !important;" class="h6 wp-block-button__link has-b-3-color has-text-color wp-element-button mx-2 button-toggle active" onClick="removeTagFilter()" href="#!">All</a>
                    <a style="display:inline-block;font-size:15px !important;" class="h6 wp-block-button__link has-b-3-color has-text-color wp-element-button mx-2 button-toggle" onClick='filterByTag("full-stack", "Full Stack")' href="#!">Full Stack</a>
                    <a style="display:inline-block;font-size:15px !important;" class="h6 wp-block-button__link has-b-3-color has-text-color wp-element-button mx-2 button-toggle" onClick='filterByTag("front-end", "Front End")' href="#!">Front End</a>
                    <a style="display:inline-block;font-size:15px !important;" class="h6 wp-block-button__link has-b-3-color has-text-color wp-element-button mx-2 button-toggle" onClick='filterByTag("wordpress", "WordPress")' href="#!">WordPress</a>
                    <a style="display:inline-block;font-size:15px !important;" class="h6 wp-block-button__link has-b-3-color has-text-color wp-element-button mx-2 button-toggle" onClick='filterByTag("research-and-application", "Research and Application")' href="#!">Research and Application</a>
                </div>
            </div>

            <div id="clear-tags"></div>
            
            <div class="post-list container-fluid px-0">
                <?php

                    $postCounter = 0;
                    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                   
                    
                         $args = array(
                             'post_type' => 'post',
                             'post_status' => 'publish',
                             'category_name' => 'project',
                             'posts_per_page' => 9,
                             'paged' => $paged,
                         );
        
                    $arr_posts = new WP_Query( $args );

                    if ( $arr_posts->have_posts() ) :
                        while ( $arr_posts->have_posts() ) :
                        ++$postCounter;
                        $arr_posts->the_post();

                ?>
                <article id="<?php echo $postCounter; ?>" class="row mb-5 mb-md-6 mx-0 gx-0 gx-lg-5 gy-3 align-items-center">
                    <div class="col-12 col-lg-4">
                        
                    </div>
                    <div class="col-12 col-lg-8">
                        <a href="<?php the_permalink();?>"><h2 class="mb-3" style="font-size:1.8rem;"><?php the_title();?></h2></a>
                        <div class="mb-3">
                        <?php
                            $post_tags = get_the_tags();
                            if ( $post_tags ) {
                            foreach ( $post_tags as $tag ) {

                                echo "<span class='pills px-md-3 py-md-1 px-2 py-1 rounded' style='margin-right:10px;color:#005A8B;background-color:#E9EEFF;'>" . $tag->name . "</span>";
                            }
                            };
                        ?>
                        </div>
                        
                        <p class="mb-0"><a href="<?php the_permalink();?>"><strong>Read More</strong></a></p>
                    </div>
                </article>
                <?php  
                        endwhile; 
                    endif;
                ?>
            </div>

            

            <div class="load_more container-fluid px-0">
                <div class="row justify-content-center">
                    <div class="col-auto p-0">
                        <a href="#!" class="text-white" onClick="loadMore(this, 'Project')">
                            <button class="btn btn-primary mx-auto text-center">See More</button>
                        </a>
                    </div>
                </div>
            </div>
            <div id="errorContainer" style="display:flex;justify-content:center;padding:15px;"></div>

    <script>
        var currentTagSlug;
        if (currentTagSlug) {
            var tagButtonHtml = '<div class="row justify-content-center">' +
                                '<div class="col-auto p-0">' +
                                    '<a href="#!" class="text-white" onClick="loadMoreTagFilter(this, \'Project\')">' +
                                        '<button class="btn btn-primary mx-auto text-center">See More</button>' +
                                    '</a>' +
                                '</div>' +
                            '</div>';
                            
            $('.load_more').html(tagButtonHtml);
        } else {
            var buttonHtml = '<div class="row justify-content-center">' +
                                '<div class="col-auto p-0">' +
                                    '<a href="#!" class="text-white" onClick="loadMore(this, \'Project\')">' +
                                        '<button class="btn btn-primary mx-auto text-center">See More</button>' +
                                    '</a>' +
                                '</div>' +
                            '</div><br>';
            $('.load_more').html(buttonHtml);
        }
    </script>

        </div>
    </div>
</div>



<!-- filter the project list on tag click -->
<script>
   
  var currentPageProject = 1;

  function filterByTag(newTagSlug, newTagName) {
    
    currentTagSlug = newTagSlug;
    currentTagName = newTagName;
    currentPageProject = 1;
    
    
    $.ajax({
        url: '/wp-admin/admin-ajax.php',  
        type: 'POST',
        dataType: 'html',
        data: {
            action: 'tag_filter',
            paged: currentPageProject,
            category: 'Project',
            tag: newTagSlug,
            template: 'project',
        },
        

            success: function(res) {
                if(res) {
                    
                    $('.post-list').html(res);
                   
                    var tagButtonHtml = '<div class="row justify-content-center">' +
                                '<div class="col-auto p-0">' +
                                    '<a href="#!" class="text-white" onClick="loadMoreTagFilter(this, \'Project\')">' +
                                        '<button class="btn btn-primary mx-auto text-center">See More</button>' +
                                    '</a>' +
                                '</div>' +
                            '</div>';
                            
                    $('.load_more').html(tagButtonHtml);
                    $('#errorContainer').empty()

                   
                } else {
                    
                    console.log('no response')
                }
                
            }
        });
    };

    
    
    function loadMoreTagFilter(element, category) {

        if (currentTagSlug) {
                console.log(currentTagSlug)
                currentPageProject++; // Do currentPageBlog + 1, because I want to load the next page
               

                $.ajax({
                    type: 'POST',
                    url: '/wp-admin/admin-ajax.php',
                    dataType: 'html',
                    data: {
                        action: 'load_more_tag_filter',
                        paged: currentPageProject,
                        category: category,
                        tag: currentTagSlug,
                        template: 'project',
                    },
                success: function (res) {
                    if(res) {
                        
                        jQuery('.post-list').append(res);
                        
                    } else {
                       
                        let noResponseError = "<div class='row justify-content-center'><div class='col-auto'><span style='font-size:14px;' class='mt-4'>Showing all results</span></div></div>"
                        
                        jQuery('#errorContainer').html(noResponseError);
                    }
                }
                });
        } else {
            loadMore();
        }
};

function removeTagFilter () {

    var paged = "<?php echo $paged; ?>"; 
    

    $.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'html',
            data: {
                action: 'remove_tag_filter',
                paged: paged,
                category: 'Project',
                template: 'project',
            },

            success: function (res) {
                if(res) {

                    $('.post-list').html(res);
                    
                    $('#errorContainer').empty();

                    var buttonHtml = '<div class="row justify-content-center">' +
                                '<div class="col-auto p-0">' +
                                    '<a href="#!" class="text-white" onClick="loadMore(this, \'Project\')">' +
                                        '<button class="btn btn-primary mx-auto text-center">See More</button>' +
                                    '</a>' +
                                '</div>' +
                            '</div>';
                    $('.load_more').html(buttonHtml);


                } else {

                    console.log("huevos rancheros")

                }
            }
        });

};

$(document).ready(function(){
   
    $(".button-toggle").click(function(){
        $(this).toggleClass("active");
        $(".button-toggle").not(this).removeClass("active");
    });

});

let currentPage = 1;
function loadMore(element, category, template) {
    
  currentPage++; // Do currentPage + 1, because I want to load the next page
  

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
        
        $(element).parents('.load_more').siblings('.post-list').append(res);
        
      } else {
         
         let noResponseError = "<div class='row justify-content-center'><div class='col-auto'><span style='font-size:14px;' class='mt-4'>Showing all results</span></div></div>"
        $('#errorContainer').html(noResponseError);
        
      }
    }
  });
};
</script>



<?php get_footer(); ?>