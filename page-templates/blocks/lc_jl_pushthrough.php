<section class="jlp pb-5">
    <div class="container-xl">
        <div class="earlybird__inner bg--grad p-4">
            <div class="row g-4">
                <div class="col-md-6 text-center">
                    <div class="h4 text-white">Race Photography by</div>
                    <a href="https://jlphoto.smugmug.com/" target="_blank"><img src="<?= get_stylesheet_directory_uri() ?>/img/jl-photography.png" width="794" height="124" class="w-md-75"></a>
                </div>
                <div class=" col-md-6">
                    <div class="mb-3 text-center"><a href="https://jeremy-landey-photography.photohawk.com/galleries/run-barns-green" target="_blank">View all photos</a> <span class="text-white">or enter your bib number below</span></div>

                    <div class="row g-2">
                        <div class="col-md-8">
                            <input type="text" placeholder="Bib number" name="bib" id="bib" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn--sm btn-gold d-block d-md-inline" id="bibSearch">Search</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<script>
    function openGallery() {
        // Get the value of the input field
        var bibNumber = document.getElementById("bib").value;

        // Construct the URL with the input value
        var url = "https://jeremy-landey-photography.photohawk.com/galleries/run-barns-green?text=" + bibNumber;

        // Open the URL in a new tab
        window.open(url, '_blank');
    }

    // Listen for click on the search button
    document.getElementById("bibSearch").addEventListener("click", openGallery);

    // Listen for "Enter" key press on the #bib field
    document.getElementById("bib").addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            openGallery();
        }
    });
</script>