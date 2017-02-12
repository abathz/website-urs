<?php

/** 
 * Prints the box content 
 */
function sslider_slide_management_callback($post) 
{
    $sslider_data = get_post_meta($post->ID, 'sslider_data',true);    
    ?>

    <div class"slide-management">
        <textarea id="original-sslider-data" style="display:none;"><?php echo $sslider_data ?></textarea>
        <textarea id="edited-sslider-data" name="sslider_data" style="display:none;"><?php echo $sslider_data ?></textarea>

    	<ul id="sslider-slides-list">
            <?php
            $arrData = false;

            // if there are a previous data
            if($sslider_data != '')
            {
                $arrData = unserialize(base64_decode($sslider_data));                
            }

            echo get_slide_rows($arrData);
            ?>

            <li class="list_item" id="add-new-slide">  
                <div class="sslider_td_container">
                    <div class="sslider_slide_thumbnail" data-slug="add-new-slide" sslider-add-slide ></div>
                    <div class="sslider_slide_info">
                        <span>Add New Slide</span>
                    </div>
                </div>
            </li>
            <li class="list_item not-a-sangar-data" id="ads-square">  
                <div class="sslider_td_container" sslider-advanced-config>
                    <img src="<?php echo SANGAR_SLIDER_DIR_URL ?>/images/150x185_banners.jpg">
                </div>
            </li>
        </ul>

        <div id="sslider-end-list"></div>
    </div>

    <!-- Slider Preview -->
    <div id="sslider-preview-slide" class="sslider-full-modal" title="Sangar Slider Preview" style="display:none;">
        <div id="sangar-slider-review">
            <?php echo do_shortcode("[sangar-slider id={$post->ID}]") ?>
        </div>
    </div>

    <!-- Modal delete confirm -->
    <div id="sslider-slideshow-delete-dialog" title="Permanently Delete" style="display:none;">
        <p style="margin:10px 0;font-size:14px;">
            This action will delete your selected item permanently. 
            <br><b>Are you sure?</b>
        </p>
    </div>

    <?php
}

