<?php include 'header.php';?>



        <main class="page-main">
            <div class="section-hero">
                <div class="section-hero__bg"><img src="assets/sillider4.jpg" alt="home-hero"></div>
                <div class="section-hero__content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
                    <h1 class="section-hero__title section-hero__top_padding">Gallery</h1>
                </div>
            </div>




<style>
    /* Container styling */
.gallery-section {
  padding: 80px 20px;
  background-color: #f5f5f5;
}

.container {
  max-width: 1200px;
  margin: auto;
}

/* Grid layout */
.gallery-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
}

/* Gallery item */
.gallery-item {
  position: relative;
  overflow: hidden;
  border-radius: 6px;
}

.gallery-image {
  position: relative;
}

.gallery-image img {
  width: 100%;
  height: 300px;
  display: block;
  transition: transform 0.3s ease;
}

/* Hover zoom effect */
.gallery-item:hover img {
  transform: scale(1.05);
}

/* Orange overlay on hover */
.overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color:rgba(235, 89, 49, 0.43); /* Orange with transparency */
  opacity: 0;
  transition: opacity 0.3s ease;
  z-index: 1;
}

.gallery-item:hover .overlay {
  opacity: 1;
}

/* Responsive breakpoints */
@media (max-width: 992px) {
  .gallery-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 768px) {
  .gallery-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 480px) {
  .gallery-grid {
    grid-template-columns: 1fr;
  }
}

</style>





            <section id="portfolio" class="gallery-section">
  <div class="container">
    <div class="gallery-grid">
      <!-- Repeat this block 16 times for 4 rows -->
      <div class="gallery-item">
        <div class="gallery-image">
          <img src="assets/product/img.jpg" alt="Gallery Image">
          <div class="overlay"></div>
        </div>
      </div>

      <div class="gallery-item">
        <div class="gallery-image">
          <img src="assets/product/img1.jpg" alt="Gallery Image">
          <div class="overlay"></div>
        </div>
      </div>

      <div class="gallery-item">
        <div class="gallery-image">
          <img src="assets/product/img2.jpg" alt="Gallery Image">
          <div class="overlay"></div>
        </div>
      </div>

      <div class="gallery-item">
        <div class="gallery-image">
          <img src="assets/product/img3.jpg" alt="Gallery Image">
          <div class="overlay"></div>
        </div>
      </div>
      <!-- Add 15 more .gallery-item blocks here -->
    </div>
  </div>
 

 <br> 
  <div class="container">
    <div class="gallery-grid">
      <!-- Repeat this block 16 times for 4 rows -->
      <div class="gallery-item">
        <div class="gallery-image">
          <img src="assets/product/img8.jpg" alt="Gallery Image">
          <div class="overlay"></div>
        </div>
      </div>

      <div class="gallery-item">
        <div class="gallery-image">
          <img src="assets/product/img12.jpg" alt="Gallery Image">
          <div class="overlay"></div>
        </div>
      </div>

      <div class="gallery-item">
        <div class="gallery-image">
          <img src="assets/product/img10.jpg" alt="Gallery Image">
          <div class="overlay"></div>
        </div>
      </div>

      <div class="gallery-item">
        <div class="gallery-image">
          <img src="assets/product/img11.jpg" alt="Gallery Image">
          <div class="overlay"></div>
        </div>
      </div>
      <!-- Add 15 more .gallery-item blocks here -->
    </div>
  </div>


  <br> 
  <div class="container">
    <div class="gallery-grid">
      <!-- Repeat this block 16 times for 4 rows -->
      <div class="gallery-item">
        <div class="gallery-image">
          <img src="assets/product/img4.jpg" alt="Gallery Image">
          <div class="overlay"></div>
        </div>
      </div>

      <div class="gallery-item">
        <div class="gallery-image">
          <img src="assets/product/img5.jpg" alt="Gallery Image">
          <div class="overlay"></div>
        </div>
      </div>

      <div class="gallery-item">
        <div class="gallery-image">
          <img src="assets/product/img6.jpg" alt="Gallery Image">
          <div class="overlay"></div>
        </div>
      </div>

      <div class="gallery-item">
        <div class="gallery-image">
          <img src="assets/product/img7.jpg" alt="Gallery Image">
          <div class="overlay"></div>
        </div>
      </div>
      <!-- Add 15 more .gallery-item blocks here -->
    </div>
  </div>
</section>



            
        </main>

      
        <?php include 'footer.php';?>