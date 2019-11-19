<div class="col-lg-9 mb-3">
    <div class="card bg-white box-shadow p-5">
        <div class="row">
            <?php foreach($profile as $profile){} ?>
            <div class="col-lg-12">
                <h6>Dear, </h6>
                <h4>
                    <?= $profile->u_name; ?>
                </h4>
                <hr>
                <?php foreach($view as $view){} ?>
                <?= $view->n_message; ?>
                    <br>
                    <br>
                    <p>Thank You</p>
                    <h6>Team Business Nirmanam</h6>
                    <p>A complete business consultancy solution</p>
                    <p class="small">If you face any problem contact us : <br>+91 7979085586 <br> biznirmanam@gmail.com
                        <br>


                        <div id="fb-root"></div>
                        <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div class="fb-like" data-href="https://www.facebook.com/webnirmanam" data-width="80px" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>

                        <p class="mt-2">
                            <?= date($view->n_doc); ?>
                        </p>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-1"></div>
</div>