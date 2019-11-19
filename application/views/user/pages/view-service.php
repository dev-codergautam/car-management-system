<div class="col-lg-9 mt-3 mb-3">
    <p>
        <?php echo $this->session->flashdata('statusMsg'); ?>
    </p>
    <div class="row">
        <div class="col-lg-11">
            <?php foreach($service as $rows){} ?>
            <?php
            $data = $this->datawork->get_data('users',['user_id' => $rows->s_userid]);
                foreach($data as $row){}
                $photo1 = $row->u_image;
                if($photo1 == NULL){
                    $photo = base_url() . "assets/image/user.jpg";
                }
                else {
                    $photo = base_url() . "assets/image/users/" . $row->u_image;
                }
            ?>
                <div class="row m-0">
                    <div class="col-lg-12 bg-white pt-3">
                        <div class="row">
                            <?php
                            if($rows->s_image == ""){
                                $b_image = base_url() . "assets/image/default.png";
                            }
                            else {
                                $b_image = base_url() . "assets/image/services/" . $rows->s_image;
                            }
                            ?>
                                <div class="col-lg-5">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <?php $i = 1; ?>
                                            <?php foreach($productimage as $productimage): ?>
                                            <?php
                                        if($productimage->pg_image == ""){
                                            $p_image = base_url() . "assets/image/default.png";
                                        }
                                        else {
                                            $p_image = base_url() . "assets/image/services/" . $productimage->pg_image;
                                        }
                                        ?>
                                                <?php $item_class = ($i == 1) ? 'carousel-item active' : 'carousel-item'; ?>
                                                <div class="<?php echo $item_class; ?>">
                                                    <img class="d-block w-100" src="<?= $p_image; ?>" alt="dgh" />
                                                </div>
                                                <?php $i++; ?>
                                                <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                        <div class="col-lg-7">
                            <h5 class="mt-3 text-brand">
                                <?= $rows->s_name;?>
                            </h5>
                            <h6><img src="<?= $photo; ?>" alt="<?= $row->u_image; ?>" class="small-image mr-2">
                                <?= $row->u_name;?>
                            </h6>
                            <p class="mt-3 mb-2">Category : <br></p>
                            <?php
                                    $data['category'] = $this->datawork->get_id('category', ['title_slug' => $rows->s_category]);
                                    $category_name = $data['category']['title'];
                                ?>
                                <h6>
                                    <?= $category_name;?>
                                </h6>
                                <p class="mt-3 mb-2"> </p>
                                <p>Price :</p>
                                <?php if(empty($rows->s_discountprice)): ?>
                                <h4>
                                    <span class="h3 mr-3"><i class="fa fa-inr"></i> <?= number_format($rows->s_price);?></span>

                                </h4>
                                <?php else: ?>
                                <h4><span class="h3 mr-2"><i class="fa fa-inr"></i>
                                        <?= number_format($rows->s_discountprice);?></span>
                                    <span class="h6"><del class="text-muted"><i class="fa fa-inr"></i> <?= number_format($rows->s_price);?></del></span>
                                    <?php
                                            $a = ($rows->s_discountprice/$rows->s_price)*100;
                                            $per = 100 - $a;
                                            ?>
                                        <?php if($per == 0): ?>
                                        <?php else: ?>
                                        <span class="h6 text-danger"><b><?= substr($per, 0, 2) ?>% off</b></span>
                                        <?php endif; ?>
                                </h4>
                                <?php endif; ?>
                        </div>
                        <div class="col-lg-12 mt-4 p-0">
                            <div class="col-lg-12">
                                <h6>Description</h6>
                                <hr>
                                <p class="ellipses">
                                    <?= $rows->s_desc;?>
                                </p>
                            </div>
                            <div class="col-lg-12 col-12">
                                <h5 class="text-brand font-weight-light">Share Your link </h5>
                                <p><i class="fa fa-globe"></i>
                                    <a href="<?= base_url(); ?>home/service/<?= $rows->s_nameslug; ?>" class="text-dark ellipses" target="_blank">
                                        <?= base_url() . "home/service/" . $rows->s_nameslug; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12 text-right">
                            <a href="<?= base_url(); ?>user/confirmDelete/<?= $rows->s_id; ?>" class="mb-3 btn btn-outline-dark">Delete</a>
                            <a href="<?= base_url(); ?>user/updateService/<?= $rows->s_id; ?>" class="mb-3 btn btn-outline-dark">Update</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="col-lg-1"></div>
</div>
</div>
<div class="col-lg-1"></div>
</div>
<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"><i class="fa fa-plus"></i></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

<script>
    var initPhotoSwipeFromDOM = function(gallerySelector) {

        // parse slide data (url, title, size ...) from DOM elements 
        // (children of gallerySelector)
        var parseThumbnailElements = function(el) {
            var thumbElements = el.childNodes,
                numNodes = thumbElements.length,
                items = [],
                figureEl,
                linkEl,
                size,
                item;

            for (var i = 0; i < numNodes; i++) {

                figureEl = thumbElements[i]; // <figure> element

                // include only element nodes 
                if (figureEl.nodeType !== 1) {
                    continue;
                }

                linkEl = figureEl.children[0]; // <a> element

                size = linkEl.getAttribute('data-size').split('x');

                // create slide object
                item = {
                    src: linkEl.getAttribute('href'),
                    w: parseInt(size[0], 10),
                    h: parseInt(size[1], 10)
                };



                if (figureEl.children.length > 1) {
                    // <figcaption> content
                    item.title = figureEl.children[1].innerHTML;
                }

                if (linkEl.children.length > 0) {
                    // <img> thumbnail element, retrieving thumbnail url
                    item.msrc = linkEl.children[0].getAttribute('src');
                }

                item.el = figureEl; // save link to element for getThumbBoundsFn
                items.push(item);
            }

            return items;
        };

        // find nearest parent element
        var closest = function closest(el, fn) {
            return el && (fn(el) ? el : closest(el.parentNode, fn));
        };

        // triggers when user clicks on thumbnail
        var onThumbnailsClick = function(e) {
            e = e || window.event;
            e.preventDefault ? e.preventDefault() : e.returnValue = false;

            var eTarget = e.target || e.srcElement;

            // find root element of slide
            var clickedListItem = closest(eTarget, function(el) {
                return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
            });

            if (!clickedListItem) {
                return;
            }

            // find index of clicked item by looping through all child nodes
            // alternatively, you may define index via data- attribute
            var clickedGallery = clickedListItem.parentNode,
                childNodes = clickedListItem.parentNode.childNodes,
                numChildNodes = childNodes.length,
                nodeIndex = 0,
                index;

            for (var i = 0; i < numChildNodes; i++) {
                if (childNodes[i].nodeType !== 1) {
                    continue;
                }

                if (childNodes[i] === clickedListItem) {
                    index = nodeIndex;
                    break;
                }
                nodeIndex++;
            }



            if (index >= 0) {
                // open PhotoSwipe if valid index found
                openPhotoSwipe(index, clickedGallery);
            }
            return false;
        };

        // parse picture index and gallery index from URL (#&pid=1&gid=2)
        var photoswipeParseHash = function() {
            var hash = window.location.hash.substring(1),
                params = {};

            if (hash.length < 5) {
                return params;
            }

            var vars = hash.split('&');
            for (var i = 0; i < vars.length; i++) {
                if (!vars[i]) {
                    continue;
                }
                var pair = vars[i].split('=');
                if (pair.length < 2) {
                    continue;
                }
                params[pair[0]] = pair[1];
            }

            if (params.gid) {
                params.gid = parseInt(params.gid, 10);
            }

            return params;
        };

        var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
            var pswpElement = document.querySelectorAll('.pswp')[0],
                gallery,
                options,
                items;

            items = parseThumbnailElements(galleryElement);

            // define options (if needed)
            options = {

                // define gallery index (for URL)
                galleryUID: galleryElement.getAttribute('data-pswp-uid'),

                getThumbBoundsFn: function(index) {
                    // See Options -> getThumbBoundsFn section of documentation for more info
                    var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                        pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                        rect = thumbnail.getBoundingClientRect();

                    return {
                        x: rect.left,
                        y: rect.top + pageYScroll,
                        w: rect.width
                    };
                }

            };

            // PhotoSwipe opened from URL
            if (fromURL) {
                if (options.galleryPIDs) {
                    // parse real index when custom PIDs are used 
                    // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                    for (var j = 0; j < items.length; j++) {
                        if (items[j].pid == index) {
                            options.index = j;
                            break;
                        }
                    }
                } else {
                    // in URL indexes start from 1
                    options.index = parseInt(index, 10) - 1;
                }
            } else {
                options.index = parseInt(index, 10);
            }

            // exit if index not found
            if (isNaN(options.index)) {
                return;
            }

            if (disableAnimation) {
                options.showAnimationDuration = 0;
            }

            // Pass data to PhotoSwipe and initialize it
            gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();
        };

        // loop through all gallery elements and bind events
        var galleryElements = document.querySelectorAll(gallerySelector);

        for (var i = 0, l = galleryElements.length; i < l; i++) {
            galleryElements[i].setAttribute('data-pswp-uid', i + 1);
            galleryElements[i].onclick = onThumbnailsClick;
        }

        // Parse URL and open gallery if it contains #&pid=3&gid=1
        var hashData = photoswipeParseHash();
        if (hashData.pid && hashData.gid) {
            openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
        }
    };
    // execute above function
    initPhotoSwipeFromDOM('.my-gallery');

</script>
<script src="<?= base_url(); ?>assets/js/photoswipe-ui-default.min.js"></script>
<script src="<?= base_url(); ?>assets/js/photoswipe.min.js"></script>
<script>
  !function(t){t.fn.bcSwipe=function(e){var n={threshold:50};return e&&t.extend(n,e),this.each(function(){function e(t){1==t.touches.length&&(u=t.touches[0].pageX,c=!0,this.addEventListener("touchmove",o,!1))}function o(e){if(c){var o=e.touches[0].pageX,i=u-o;Math.abs(i)>=n.threshold&&(h(),t(this).carousel(i>0?"next":"prev"))}}function h(){this.removeEventListener("touchmove",o),u=null,c=!1}var u,c=!1;"ontouchstart"in document.documentElement&&this.addEventListener("touchstart",e,!1)}),this}}(jQuery);
 
// Swipe functions for Bootstrap Carousel
$('.carousel').bcSwipe({ threshold: 50 });
</script>