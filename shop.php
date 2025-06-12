
<?php include 'header.php';?>


            <div class="section-hero">
                <div class="section-hero__bg"><img src="assets/product/img17.jpg" alt="shop-hero"></div>
                <div class="section-hero__content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
                    <p class="section-hero_subtitle section-hero_top_padding">Products By Classic Bangles</p>
                    <h1 class="section-hero__title">Our Shop</h1>
                </div>
            </div>
           
















<style>
    body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: #fff;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.button-container {
  margin: 30px 0;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 10px;
}

.custom-btn {
  padding: 10px 20px;
  border: 1px solid orange;
  background-color: transparent;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.custom-btn:hover {
  background-color: orange;
  color: #fff;
}

.image-row {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
  justify-content: center;
}

.img-box {
  position: relative;
  width: 300px;
  height: 200px;
  overflow: hidden;
}

.img-box img {
  width: 100%;
  height: 100%;
  display: block;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 165, 0, 0.3);
  opacity: 0;
  transition: opacity 0.3s ease;
  display: flex;
  justify-content: center;
  align-items: center;
}

.img-box:hover .overlay {
  opacity: 1;
}

.overlay input {
  padding: 8px;
  border: none;
  outline: none;
  border-radius: 4px;
  width: 60%;
}
</style>



 
<br> 

<style>
  
    .button-container {
      text-align: center;
      margin-top: 50px;
    }

    .button-container a {
      display: inline-block;
      margin: 10px;
      padding: 12px 24px;
      background-color: orangered;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-family: sans-serif;
      transition: background-color 0.3s;
    }

    .button-container a:hover {
      background-color: black;
    }
  </style>
</style>

    <section class="button-section py-5">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center mb-4">
                    <h2>Explore Our Pages</h2>
                </div>



                <div class="button-container">
                    <a href="#">Kada</a>
                    <a href="#link2">Kangan</a>
                    <a href="#link3">Chudi</a>
                    <a href="#link4">Meenakar</a>
                    <a href="#link5">Temple</a>
                </div>



                
               
            </div>
        </div>
    </section>





 




 <div class="image-row">
    <div class="img-box">
      <img src="assets/sillide1.jpg" alt="Image 1" />
      <div class="overlay">
        <input type="text" placeholder="Search..." />
      </div>
    </div>
    <div class="img-box">
      <img src="assets/sillider.jpg" alt="Image 2" />
      <div class="overlay">
        <input type="text" placeholder="Search..." />
      </div>
    </div>
    <div class="img-box">
      <img src="assets/sillider2.jpg" alt="Image 3" />
      <div class="overlay">
        <input type="text" placeholder="Search..." />
      </div>
    </div>
  </div>


<br> 
  <div class="image-row">
    <div class="img-box">
      <img src="assets/sillider3.jpg" alt="Image 1" />
      <div class="overlay">
        <input type="text" placeholder="Search..." />
      </div>
    </div>
    <div class="img-box">
      <img src="assets/sillider4.jpg" alt="Image 2" />
      <div class="overlay">
        <input type="text" placeholder="Search..." />
      </div>
    </div>
    <div class="img-box">
      <img src="assets/sillider5.jpg" alt="Image 3" />
      <div class="overlay">
        <input type="text" placeholder="Search..." />
      </div>
    </div>
  </div>


 <br>

  <div class="image-row">
    <div class="img-box">
      <img src="assets/sillider7.jpg" alt="Image 1" />
      <div class="overlay">
        <input type="text" placeholder="Search..." />
      </div>
    </div>
    <div class="img-box">
      <img src="assets/sillider6.jpg" alt="Image 2" />
      <div class="overlay">
        <input type="text" placeholder="Search..." />
      </div>
    </div>
    <div class="img-box">
      <img src="assets/product/img.jpg" alt="Image 3" />
      <div class="overlay">
        <input type="text" placeholder="Search..." />
      </div>
    </div>
  </div>



<br> <br>
       


<style>
    /* Button Section */
.button-section {
    background-color: #f8f9fa;
}

.button-section h2 {
    font-size: 2.5rem;
    font-weight: bold;
    color: #343a40;
}

.btn-primary {
    transition: all 0.31s ease;
}

.btn-primary:hover {
    transform: scale(1.05);
}

/* Image Section */
.image-section {
    background-color: #ffffff;
}

.image-container {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
}

.image-container img {
    width: 100%;
    height: 300px;
    transition: all 0.3s ease;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
    opacity: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: opacity 0.3s ease;
}

.overlay i {
    color: white;
    font-size: 2.5rem;
}

.image-container:hover .overlay {
    opacity: 1;
}

.image-container:hover img {
    filter: brightness(80%); /* Slight color change on hover */
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .button-section h2 {
        font-size: 2rem;
    }

    .btn-primary {
        width: 100%;
        margin-bottom: 10px;
    }

    .image-container {
        margin-bottom: 20px;
    }
}
</style>






   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Search Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
  
    


                    <div class="col-12 text-center mb-4">
                                    <h2>Explore Our Pages</h2>
                </div>


    <!-- Image Section -->
    <section class="image-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="assets/product/img1.jpg" alt="Image 1" class="img-fluid">
                        <div class="overlay">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="assets/product/img2.jpg" alt="Image 2" class="img-fluid">
                        <div class="overlay">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="assets/product/img3.jpg" alt="Image 3" class="img-fluid">
                        <div class="overlay">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="assets/product/img4.jpg" alt="Image 1" class="img-fluid">
                        <div class="overlay">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="assets/product/img5.jpg" alt="Image 2" class="img-fluid">
                        <div class="overlay">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="assets/product/img6.jpg" alt="Image 3" class="img-fluid">
                        <div class="overlay">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 






<br> <br>








    <!-- Bootstrap JS and Popper.js -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script> -->
    <!-- Custom JavaScript -->
    <script src="script.js">
        // Optional: Add any dynamic functionality here
document.addEventListener('DOMContentLoaded', () => {
    // Example: Add click event to images if needed
    const images = document.querySelectorAll('.image-container img');
    images.forEach(img => {
        img.addEventListener('click', () => {
            console.log(`Clicked on ${img.alt}`);
            // Add navigation or other logic here if needed
        });
    });
});
    </script>







































































































































































<br>






<?php include 'footer.php';?>