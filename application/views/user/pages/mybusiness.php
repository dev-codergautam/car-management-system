<div class="col-lg-9 mt-3 mb-3">
    <?php foreach($mybusiness as $rows){}
    $data =  $this->datawork->get_data('users',"user_id = '$rows->u_id'");
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
        <div class="col-lg-12 text-right">
            <a href="<?= base_url(); ?>user/add_gallery/<?= $rows->id; ?>" class="btn btn-sm btn-outline-dark">Add Gallery</a>
        </div>
        <div class="col-lg-12 box-shadow bg-white mt-5 mt-lg-3 p-4">
            <div class="row">

                <?php
                if($rows->website == NULL){
                    $website = "N/A";
                }
                else {
                    $website = $rows->website;
                }
                ?>
                <?php
                if($rows->contact1 == NULL){
                    $contact1 = "N/A";
                }
                else {
                    $contact1 = $rows->contact1;
                }
                ?>
                <?php
                if($rows->email == NULL){
                    $email = "N/A";
                }
                else {
                    $email = $rows->email;
                }
                ?>
                <?php
                    if($rows->pic == ""){
                        $b_image = base_url() . "assets/image/default.png";
                    }
                    else {
                        $b_image = base_url() . "assets/clients/" . $rows->pic;
                    }
                ?>
                   
                    <div class="col-lg-8" style="margin-top:-60px;">
                        <div class="mybizzpic box-shadow" style="background-image:url(<?= $b_image; ?>);">
                        </div>
                    </div>
                    <div class="col-lg-4 pt-3 mb-3">
                        <h4 class="font-weight-light">
                            <?= $rows->business_name;?>
                        </h4>
                        <h6><img src="<?= $photo; ?>" alt="<?= $row->u_image; ?>" class="small-image mr-2">
                            <?= $row->u_name;?>
                        </h6>
                        <hr>
                        <p class="ellipses">
                            <?= $rows->description;?>
                        </p>
                    </div>
                    <div class="col-lg-12 p-lg-5 p-2">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <h6 class="text-brand">Business Details</h6>
                                <div class="hrbrand"></div>
                                <p><i class="fa fa-check"></i> Events Business :
                                    <?= $rows->category;?>
                                </p>
                                <p><i class="fa fa-check"></i> Working Experience :
                                    <?= $rows->experience;?>
                                </p>
                                <p><i class="fa fa-check"></i> Address :
                                    <?= $rows->address;?>
                                </p>
                                <p><i class="fa fa-check"></i> City :
                                    <?= $rows->city;?>
                                </p>
                                <p><i class="fa fa-check"></i> State :
                                    <?= $rows->state;?>
                                </p>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <h6 class="text-brand">Contact Details</h6>
                                <div class="hrbrand"></div>
                                <p><i class="fa fa-phone"></i>
                                    <?= $rows->contact;?>
                                </p>
                                <p><i class="fa fa-phone"></i>
                                    <?= $contact1;?>
                                </p>
                                <p><i class="fa fa-envelope"></i>
                                    <?= $email;?>
                                </p>
                                <p><i class="fa fa-globe"></i>
                                    <?= $website; ?>
                                </p>
                            </div>

                            <div class="col-lg-12 col-12">
                                <h6 class="text-brand">Share Your link </h6>
                                <div class="hrbrand"></div>
                                <p><i class="fa fa-globe"></i>
                                    <a href="<?= base_url(); ?>home/business/<?= $rows->name_slug; ?>" class="text-dark ellipses" target="_blank">
                                        <?= base_url(); ?>home/business/<?= $rows->name_slug; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php if(!empty($button)) { ?>
                    <?php foreach ($button as $but){} ?>
                    <?php if($but->up_status == 1 || $but->up_status == ""){ ?>
                    <div class="col-lg-12 text-right">
                        <a href="<?= base_url(); ?>user/request/<?= $rows->id; ?>" class="mb-3 btn btn-sm btn-outline-dark">Request for Update</a>
                        <a href="<?= base_url(); ?>user/changeimage/<?= $rows->id; ?>" class="mb-3 btn btn-sm btn-outline-dark">Change Image</a>
                    </div>
                    <?php } else{ ?>
                    <div class="col-lg-12 text-right">
                        <a href="<?= base_url(); ?>user/request/<?= $rows->id; ?>" class="mb-3 btn btn-sm btn-outline-danger disabled">Already Requested</a>
                        
                        <a href="<?= base_url(); ?>user/changeimage/<?= $rows->id; ?>" class="mb-3 btn btn-sm btn-outline-dark">Change Image</a>
                    </div>
                    <?php } }else{ ?>
                    <div class="col-lg-12 text-right">
                        <a href="<?= base_url(); ?>user/request/<?= $rows->id; ?>" class="mb-3 btn btn-sm btn-outline-dark">Request for Update</a>
                        <a href="<?= base_url(); ?>user/changeimage/<?= $rows->id; ?>" class="mb-3 btn btn-sm btn-outline-dark">Change Image</a>
                    </div>
                    <?php } ?>
                    <div class="col-lg-12 text-right">
                    <a href="<?= base_url(); ?>user/add_gallery/<?= $rows->id; ?>" class="btn btn-sm btn-outline-dark">Add Gallery</a>
                </div>
            </div>
        </div>

        <div class="col-lg-12 box-shadow card mt-3">
            <div class="row my-gallery">
                <?php foreach($img as $img): ?>
                <?php list($width, $height, $type, $attr) = getimagesize(base_url() . "assets/image/gallery/" . $img->g_image); ?>
                <figure class="col-lg-4 mt-3" itemprop="associatedMedia" itemscope>
                    <a href="<?= base_url(); ?>assets/image/gallery/<?= $img->g_image; ?>" itemprop="contentUrl" data-size="<?= $width ."x". $height ?>">
                    <img src="<?= base_url(); ?>assets/image/gallery/<?= $img->g_image; ?>" itemprop="thumbnail" alt="Image description" class="img-fluid"/>
                    </a>
                    <figcaption itemprop="caption description" class="text-center">
                        <?= $img->g_title; ?>
                    </figcaption>
                </figure>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
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
