<div class="col-lg-12 bg-brand">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 m-0 p-0">
            <div class="p-2 pt-4">
                <div class="form-group col-12">
                    <label class="sr-only" for="inlineFormInputGroupUsername2">Password</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend border-0">
                            <div class="input-group-text"><i class="fa fa-search"></i></div>
                        </div>
                        <input type="text" name="search_text" id="search_text" placeholder="Search business details" class="form-control" id="inlineFormInputGroupUsername2">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<div class="mt-3"></div>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div id="result"></div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>

<script>
    $(document).ready(function() {

        load_data();

        function load_data(query) {
            $.ajax({
                url: "<?php echo base_url(); ?>home/fetch",
                method: "POST",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
                }
            })
        }

        $('#search_text').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
    });

</script>
