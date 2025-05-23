<?php get_header(); ?>
<!-- Add Poppins font from Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
body, html {
    font-family: 'Poppins', Arial, sans-serif;
    font-weight: 400;
}
h1, h2, h3, h4, h5, h6 {
    font-family: 'Poppins', Arial, sans-serif;
    font-weight: 500;
}
.repm-property-title {
    font-family: 'Poppins', Arial, sans-serif;
    font-weight: 500;
}
.repm-property-excerpt,
.repm-property-location,
.repm-property-price,
.repm-meta-box,
.repm-meta-box-label,
.repm-meta-box-value {
    font-family: 'Poppins', Arial, sans-serif;
    font-weight: 400;
}

/* 99acres-inspired filter form styles + collapsible for mobile */
#repm-listing-filter {
    background: #fff;
    border: 1px solid #e2e6ea;
    border-radius: 18px;
    box-shadow: 0 4px 28px rgba(18, 52, 102, 0.07);
    padding: 22px 18px 10px 18px;
    margin-bottom: 36px;
    display: flex;
    flex-wrap: wrap;
    gap: 14px 0;
    margin-top: 20px;
}
#repm-listing-filter .form-control,
#repm-listing-filter .form-select {
    border-radius: 8px;
    border: 1.5px solid #bfc7d1;
    font-size: 0.70rem;
    min-height: 48px;
    box-shadow: none;
    margin-bottom: 0;
    background: #f6f8fa;
    transition: border-color 0.2s;
    font-family: 'Poppins', Arial, sans-serif;
    font-weight: 400;
}
#repm-listing-filter .form-control:focus,
#repm-listing-filter .form-select:focus {
    border-color: #4e73df;
    background: #fff;
}
#repm-listing-filter .btn-primary {
    border-radius: 30px;
    font-size: 0.75rem;
    padding: 12px 36px;
    font-weight: 500;
    background: linear-gradient(90deg, #4e73df 0%, #2e59d9 100%);
    border: none;
    box-shadow: 0 2px 6px 0 rgba(44, 62, 80,0.07);
    transition: background 0.2s;
    font-family: 'Poppins', Arial, sans-serif;
}
#repm-listing-filter .btn-primary:hover {
    background: linear-gradient(90deg, #2e59d9 0%, #224abe 100%);
}
#repm-listing-filter .btn-toggle-filters {
    display: none;
    font-family: 'Poppins', Arial, sans-serif;
    font-weight: 500;
}
@media (max-width: 575.98px) {
    #repm-listing-filter {
        padding: 12px 7px 5px 7px;
    }
    .repm-search-form-row,
    .repm-search-form-group,
    .repm-search-form-group .form-control,
    .repm-search-form-group .form-select,
    #repm-listing-filter .col-12,
    #repm-listing-filter .col-sm-6,
    #repm-listing-filter .col-md-2,
    #repm-listing-filter .filter-city {
        width: 100% !important;
        max-width: 100% !important;
        min-width: 0 !important;
        box-sizing: border-box;
        padding-right: 0 !important;
        padding-left: 0 !important;
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
    #repm-listing-filter .form-control,
    #repm-listing-filter .form-select {
        width: 100% !important;
        max-width: 100% !important;
        min-width: 0 !important;
        box-sizing: border-box;
    }
    #repm-listing-filter .btn-primary, 
    #repm-listing-filter .btn-toggle-filters {
        width: 100%;
    }
}
@media (max-width: 991.98px) {
    #repm-listing-filter {
        padding: 14px 7px 5px 7px;
    }
}
@media (max-width: 767.98px) {
    #repm-listing-filter {
        flex-direction: column;
        gap: 10px 0;
    }
    /* Hide all filter fields except city and button on mobile */
    #repm-listing-filter .filter-group {
        display: none;
    }
    #repm-listing-filter .filter-city {
        width: 100%;
        flex: 1 0 100%;
        max-width: 100%;
    }
    #repm-listing-filter .btn-toggle-filters {
        display: inline-block;
        width: 100%;
        margin-top: 1px;
        border-radius: 30px;
        font-size: 0.75rem;
        padding: 12px 36px;
    }
    #repm-listing-filter.filters-expanded .filter-group {
        display: block;
        margin-top: 10px;
    }
    #repm-listing-filter.filters-expanded .btn-toggle-filters span::before {
        content: "▲ ";
    }
    #repm-listing-filter .btn-toggle-filters span::before {
        content: "▼ ";
    }
}
#repm-listing-filter .col-12,
#repm-listing-filter .col-sm-6,
#repm-listing-filter .col-md-2 {
    margin-bottom: 0;
    padding-right: 10px;
    padding-left: 10px;
}

/* Property grid and card styles */
.repm-listing-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 16px;
}
@media (max-width: 991.98px) {
    .repm-listing-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
}
@media (max-width: 575.98px) {
    .repm-listing-grid {
        grid-template-columns: 1fr;
        gap: 14px;
        margin-bottom: 20px;
    }
}
.repm-property-card {
    background: #fafdff;
    border: 1.5px solid #e2e6ea;
    border-radius: 18px;
    box-shadow: 0 2px 16px rgba(18, 52, 102, 0.05);
    padding: 26px 22px 20px 22px;
    display: flex;
    flex-direction: column;
    transition: box-shadow 0.24s, border-color 0.18s;
    height: 100%;
    position: relative;
    overflow: hidden;
    font-family: 'Poppins', Arial, sans-serif;
    margin-left: 10px;
    margin-right: 10px;
}
.repm-property-card:hover {
    box-shadow: 0 6px 32px rgba(44, 62, 80,0.13);
    border-color: #4e73df;
}
.repm-property-title {
    font-size: 1.15rem;
    font-weight: 500;
    margin-bottom: 8px;
    color: #253858;
    line-height: 1.25;
}
.repm-property-location, .repm-property-price {
    font-size: 0.95rem;
    margin-bottom: 4px;
}
.repm-property-location i,
.repm-property-price i {
    color: #4e73df;
    margin-right: 5px;
}
.repm-property-price {
    color: #087c5a;
    font-weight: 600;
    font-size: 0.95rem;
}
.repm-property-excerpt {
    color: #6c7893;
    font-size: 0.70rem;
    margin-bottom: 14px;
    min-height: 2.2em;
}
/* Force meta box to always be a single row, even on mobile */
.repm-meta-box {
    display: flex;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    gap: 18px !important;
    margin-bottom: 0;
}
.repm-meta-box-item {
    display: flex;
    align-items: center;
    gap: 5px;
    background: #e6efff;
    border-radius: 7px;
    padding: 7px 10px;
    font-size: 0.85em;
    margin-bottom: 0 !important;
    color: #253858;
}
.repm-meta-box-item i {
    color: #4e73df;
}
.repm-meta-box-label {
    display: none; /* Hide label text */
}
.repm-meta-box-value {
    color: #2e4a7a;
    font-weight: 600;
}
.repm-property-card .btn-outline-primary {
    border-radius: 6px;
    font-size: 0.75rem;
    padding: 7px 18px;
    margin-top: 13px;
    margin-bottom: 0;
    border-width: 1.5px;
    color: #ffffff;
    border-color: #4e73df;
    font-weight: 500;
    background: #4e73df;
    transition: background 0.16s, color 0.16s;
    font-family: 'Poppins', Arial, sans-serif;
}
.repm-property-card .btn-outline-primary:hover {
    background: #4e73df;
    color: #fff;
    border-color: #4e73df;
}
@media (max-width: 767.98px) {
    #repm-listing-filter {
        flex-direction: column;
        gap: 10px 0;
        padding: 25px;
        margin: 10px;
        border: 1px 1px 1px 1px;
        border-color: #2e59d9;
    }
}
.property-swiper .swiper-slide {
    margin-top: 16px;
    margin-bottom: 16px;
}
</style>
<main class="container py-4">
   <!-- <h1 class="mb-4" style="font-weight:500; color:#253858; font-family: 'Poppins', Arial, sans-serif;">All Properties</h1>-->
    <!-- Advanced Filter Bar - Mobile collapsible -->
    <form id="repm-listing-filter" class="row g-3 mb-4 align-items-end justify-content-center" autocomplete="off">
        <div class="col-12 col-sm-6 col-md-2 filter-city">
            <input type="text" class="form-control" name="city" placeholder="City">
        </div>
        <!-- Toggle for more filters (mobile only) -->
        <div class="col-12 d-md-none">
            <button type="button" class="btn btn-outline-secondary btn-toggle-filters">
                <span>More Filters</span>
            </button>
        </div>
        <div class="col-12 col-sm-6 col-md-2 filter-group">
            <select class="form-select" name="type">
                <option value="">Type</option>
                <option value="residential">Residential</option>
                <option value="commercial">Commercial</option>
            </select>
        </div>
        <div class="col-12 col-sm-6 col-md-2 filter-group">
            <input type="text" class="form-control" name="min_price" placeholder="Min Price">
        </div>
        <div class="col-12 col-sm-6 col-md-2 filter-group">
            <input type="text" class="form-control" name="max_price" placeholder="Max Price">
        </div>
        <div class="col-12 col-sm-6 col-md-2 filter-group">
            <select class="form-select" name="bedrooms">
                <option value="">Bedrooms</option>
                <option value="1">1+</option>
                <option value="2">2+</option>
                <option value="3">3+</option>
                <option value="4">4+</option>
            </select>
        </div>
        <div class="col-12 col-sm-6 col-md-2 filter-group">
            <select class="form-select" name="sort">
                <option value="date_desc">Newest</option>
                <option value="date_asc">Oldest</option>
                <option value="price_asc">Price (Low-High)</option>
                <option value="price_desc">Price (High-Low)</option>
            </select>
        </div>
        <div class="col-12 col-md-auto">
            <button type="submit" class="btn btn-primary px-4">Filter</button>
        </div>
    </form>
    <div id="repm-listing-results">
        <?php
        // Custom property listing output with cards
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'property',
            'posts_per_page' => 12,
            'paged' => $paged
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            echo '<div class="repm-listing-grid">';
            while ($query->have_posts()) : $query->the_post();
                $price = get_post_meta(get_the_ID(), '_price', true);
                $city = get_post_meta(get_the_ID(), '_city', true);
                $bedrooms = get_post_meta(get_the_ID(), '_bedrooms', true);
                $bathrooms = get_post_meta(get_the_ID(), '_bathrooms', true);
                $area = get_post_meta(get_the_ID(), '_carpet_area', true);
                // $ownership = get_post_meta(get_the_ID(), '_ownership', true); // Removed ownership
                ?>
                <div class="repm-property-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <div style="margin-bottom:12px;">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', [
                                    'class'=>'img-fluid rounded',
                                    'style'=>'width:100%;height:200px;object-fit:cover;'
                                ]); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="repm-property-title"><?php the_title(); ?></div>
                    <div class="repm-property-location"><i class="fa fa-map-marker-alt"></i> <?php echo esc_html($city); ?></div>
                    <div class="repm-property-price"><i class="fa fa-tag"></i> <?php echo esc_html($price ? '₹' . repm_format_indian_currency($price) : 'Price on Request'); ?></div>
                    <div class="repm-property-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></div>
                    <div class="repm-meta-box mb-2 mt-auto">
                        <div class="repm-meta-box-item" title="Bedrooms">
                            <i class="fa fa-bed"></i>
                            <span class="repm-meta-box-value"><?php echo esc_html($bedrooms); ?></span>
                        </div>
                        <div class="repm-meta-box-item" title="Bathrooms">
                            <i class="fa fa-bath"></i>
                            <span class="repm-meta-box-value"><?php echo esc_html($bathrooms); ?></span>
                        </div>
                        <div class="repm-meta-box-item" title="Area">
                            <i class="fa fa-expand"></i>
                            <span class="repm-meta-box-value"><?php echo esc_html($area); ?> sq ft</span>
                        </div>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary btn-sm align-self-start">View Details</a>
                </div>
                <?php
            endwhile;
            echo '</div>';
            // Pagination
            $big = 999999999; // need an unlikely integer
            echo '<div class="mt-4">';
            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $query->max_num_pages,
                'prev_text' => '&laquo; Prev',
                'next_text' => 'Next &raquo;'
            ));
            echo '</div>';
            wp_reset_postdata();
        else :
            echo '<div class="alert alert-info">No properties found.</div>';
        endif;
        ?>
    </div>
</main>
<script>
jQuery(function($){

    // --- Indian currency formatting for min and max price ---
    function formatIndianCurrency(input) {
        let value = input.value.replace(/[^0-9]/g, '');
        if (value === '') {
            input.value = '';
            return;
        }
        let last3 = value.substring(value.length - 3);
        let other = value.substring(0, value.length - 3);
        if (other !== '') last3 = ',' + last3;
        let formatted = other.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + last3;
        input.value = '₹' + formatted;
    }
    function stripCurrency(val) {
        return val.replace(/[^0-9]/g, '');
    }
    $('input[name="min_price"], input[name="max_price"]').on('input', function(){
        formatIndianCurrency(this);
    });
    // --- End Indian currency formatting ---

    // Mobile filter toggle (delegated for robustness)
    $(document).on('click', '.btn-toggle-filters', function(e){
        e.preventDefault();
        var $form = $('#repm-listing-filter');
        $form.toggleClass('filters-expanded');
        var expanded = $form.hasClass('filters-expanded');
        $(this).find('span').text(expanded ? 'Less Filters' : 'More Filters');
    });

    // AJAX filter (delegated for safety, collapse filters after submit)
    $(document).on('submit', '#repm-listing-filter', function(e){
        e.preventDefault();
        var $form = $(this);
        // Collapse filters after clicking filter
        $form.removeClass('filters-expanded');
        $form.find('.btn-toggle-filters span').text('More Filters');
        // Strip ₹ and commas before submit
        $form.find('input[name="min_price"], input[name="max_price"]').each(function(){
            this.value = stripCurrency(this.value);
        });
        var data = $form.serialize();
        $('#repm-listing-results').html('<div class="text-center my-5"><i class="fa fa-spinner fa-spin fa-2x"></i></div>');
        $.get('<?php echo admin_url('admin-ajax.php'); ?>', data+'&action=repm_filter_properties', function(resp){
            $('#repm-listing-results').html(resp);
        });
    });
});
</script>
<?php get_footer(); ?>