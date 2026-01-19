<?php
/*
Template Name: About Us
Template Post Type: page
*/
?>

<?php get_header(); ?>
<section>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-4 md:items-center md:gap-8">
      <div class="md:col-span-1">
        <div class="max-w-prose md:max-w-none">
          <h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">
            Empowering the Next Generation of Digital Creators.
          </h2>

          <p class="mt-4 text-gray-700">
            At MeroCode, we believe that learning technology should be creative, fun, and future-focused.
Our mission is to help students of all ages discover the power of programming, design, and digital thinking through interactive, project-based learning.
          </p>
        </div>
      </div>

      <div class="md:col-span-3">
        <img
          src="<?php echo esc_url( get_theme_file_uri('images/aboutus.png') ); ?>" alt="About Us"
          class="rounded"
          alt=""
        />
      </div>
    </div>
  </div>
</section>
<?php get_footer();