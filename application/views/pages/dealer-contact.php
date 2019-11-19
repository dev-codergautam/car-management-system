<div class="backcoverdealer">

</div>
<div class="col-lg-12 mb-3">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 mt-3 box-shadow">
            <div class="row">
                <div class="form-group col-12 mt-4">
                    <h1 class="text-center">Contact us</h1>
                    <hr class="hrbrand">
                </div>
                <div class="col-lg-6">
                    <div class="container p-lg-4 ">
                        <?= $this->session->flashdata('email_sent'); ?>
                            <?= form_open('home/sent_mail'); ?>
                                <div class="form-group">
                                    <label for="fname">Name</label>
                                    <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Your name..">
                                    <?= form_error('name'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="lname">Email</label>
                                    <input type="text" class="form-control form-control-sm" id="email" name="email" placeholder="Your Email Id..">
                                    <?= form_error('email'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="lname">Contact</label>
                                    <input type="number" class="form-control form-control-sm" id="subject" name="subject" placeholder="Contact">
                                    <?= form_error('subject'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Message</label>

                                    <textarea class="form-control" id="message" name="message" placeholder="Give us your valuable feedback..." rows="4"></textarea>
                                    <?= form_error('message'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-outline-dark btn-block">
                                </div>
                                <?= form_close(); ?>
                    </div>
                    <div class="col-lg-6 p-5">
                        <h6>CONTACT :</h6>
                        <div itemscope itemtype="https://schema.org/Person">
                            <span itemprop="name"><?php $dealername; ?></span><br>
                            <span itemprop="company">WebNirmanam</span><br>
                            <span itemprop="tel">7979085586</span><br>
                            <a itemprop="email" href="mailto:sumitsarraf@biznirmanam.com">sumitsarraf@biznirmanam.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-1"></div>
</div>
