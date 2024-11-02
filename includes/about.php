<!-- Foto dengan frame bulat -->
<div class="d-flex justify-content-center mt-3">
  <img src="assets/Image/Me.jpg" alt="Foto Saya" class="rounded-circle profile-photo">
</div>

<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide mt-3">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/Image/smkn 1 setu.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>High School</h5>
        <p>SMK Negri 1 SETU</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/Image/upb.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>College</h5>
        <p>Pelita Bangsa University</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- CSS untuk Foto Profile -->
<style>
  .profile-photo {
    width: 150px; /* Ukuran foto */
    height: 150px;
    object-fit: cover;
    border: 5px solid white; /* Border putih untuk frame */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Bayangan */
  }
</style>
