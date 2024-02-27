  <?php $this->load->view('frontend/include/header'); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/"); ?>css/slider.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/"); ?>css/products.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/"); ?>css/nedenbiz.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/"); ?>css/aboutus.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/"); ?>css/count.css">


  <body>

    <!-- ----slider------ -->
    <div class="slideshow-container">
      <?php foreach ($slider as $index => $sliderogeleri) : ?>
        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="<?= base_url('') . $sliderogeleri->image; ?>" style="width:100%">
          <!-- <div class="text">Buraya Yazı Girebilirsiniz 1</div> -->
        </div>
      <?php endforeach; ?>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
    </div>

    <br>

    <!-- <div style="text-align:center">
  <?php foreach ($slider as $index => $sliderogeleri) : ?>
    <span class="dot" onclick="currentSlide(<?php echo $index + 1; ?>)"></span> 
  <?php endforeach; ?>
</div>
-->
    <!-- ----slider Bitiş------ -->
    <!-- ---hakkimizda---- -->
    <!-- <section>
  <div class="product-heading"> 
    <h1 >BİZ KİMİZ?</h1>
  </div>

  <div class="aboutduz">

    <div class="makineimg">
      <img src="images/makine1.webp">
    </div>
    <div style="display: flex;
    gap: 60px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    align-content: center;">
    <div style="display:flex; gap: 30px; flex-direction: column; flex-wrap: wrap;">

      <div class="aboutyazi" style="max-width: 750px;">

        <h2>Hakkimizda</h2>
        <span>Firmamız ARS OYUNCAK olarak 2009 yılında jetonla ve parayla çalışan makinelerin üretimi, satışı ve teknik servislik hizmetleriyle sektöre girmiştir. Hergün gelişmekte olan teknolojiye ayak uydurarak son yıllarda her türlü oyun makinelerinin ithalatını ve ARSPARK EĞLENCE DÜNYASI adı altında işletmesini yapmaktadır. Oyun ve eğlence parklarını anahtar teslim kurup, hizmet kalitemizden taviz vermeden müşteri memnuniyetine önem veren bir anlayışla hizmet vermekteyiz. Ürünlerimiz ile bütün yaş guruplarına hitap eden oyun, eğlence ve otomat makinelerini, müşterilerineverdiği güven ile ismini marka yapma yolunda ilerleyen ARS OYUNCAK, kaliteli geniş ürün yelpazasi, teknik servis ve satış sonrası hizmet kalitesiyle yenilikleri üretip takip edilen bir anlayışla çalışmaktadır. Türkiye'de ilk olan birçok yerli oyun makinesinin üretimini sağlayan ARS OYUNCAK, sektördeki önemli kuruluşlar içerisinde yerini almıştır. Son teknoloji ürünlerinden; simulasyon oyunları, XD sinemalar, ekranlı/ekransız kiddie rides makineleri, ve diğer akla gelebilecek her türlü oyun makinelerini firmamızdan temin edebilir, sorunsuz ve çözüme odaklı teknik servis hizmetimizden yararlanabilirsiniz.</span>
      </div>
      <div style="    display: flex;
      gap: 30px;
      flex-direction: row;
      flex-wrap: wrap;
      align-content: center;
      justify-content: center;
      align-items: center;">
      <div class="aboutyazi">
        <h2>Vizyonumuz</h2>
        <span>Firmamız; sektörde geniş ürün yelpazesi ile yenilikçi, öncü bir kuruluş olmayı, müşterilerimize saygılı ve hergün bir önceki günden daha iyi hizmet verme isteğiyle çalışan, kalite ve fiyatta müşterilerimizin arzusuna hitap eden, yasalara uyan ve her daim kaliteli ürün imal eden, eğlence sektöründeki en kapsamlı firma olmayı hedeflemektedir.</span>
      </div>
      <div class="aboutyazi">
        <h2>Misyonumuz</h2>
        <span>ARS OYUNCAK; müşterileri için son derece değerli olan hizmetleri vermeyi, yüksek kalitedeki zengin ve renk modelleri ile standart ürün çeşitlerini rekabet ortamının yarattığı fiyat anlayışı ile sunmayı, değişen pazar şartlarına karşı sektörü hızla cevap verebilecek aktif bir yapıya kavuşturmayı, yapılan her işin yüksek ahlaki standartlarda güvenilir olmasını misyon edinmiştir.</span>
      </div>
    </div>
  </div>

</div>
<div>
  <img src="images/packman2.png">
  <img src="images/street.png">
  <img style="rotate: 180deg;" src="images/packman2.png">
</div>
</div>
</section> -->
    <nav class="social">
      <ul>
        <li><a href="<?php echo $social[0]->s_whatsapp; ?>">Whatsapp <i class="fa fa-whatsapp"></i></a></li>
        <li><a href="<?php echo $social[0]->s_instagram; ?>">instagram <i class="fa fa-instagram"></i></a></li>
        <li><a href="mailto:<?php echo $social[0]->s_mail; ?>">Gmail <i class="fa fa-google"></i></a></li>
        <li><a href="<?php echo $social[0]->s_facebook; ?>">Facebook <i class="fa fa-facebook"></i></a></li>
      </ul>
    </nav>

    <!-- -----ÜRÜN SERGİLEME------ -->
    <section>
      <div class="product-heading">
        <div class="hricin">
          <h1><?php echo $baslik[0]->b_urunler; ?></h1>
          <hr style="width:500px;">
        </div>
      </div>

      <div class="yapi">
        <?php foreach ($urunler as $urunlerogeleri) { ?>
          <div class="container shoe">
            <div class="productImage shoeImg" style="
        background-image: url(<?= base_url('') . $urunlerogeleri->u_image; ?>); background-color: black;"></div>

            <div class="color shirtColor">
              <a class="detaybutton" href="<?php echo base_url('admin/productdetail') . '/' . $urunlerogeleri->id; ?>">Detay</a>
            </div>
            <div class="productName shoeName">
              <?php echo $urunlerogeleri->u_baslik; ?>
            </div>
          </div>

        <?php } ?>
      </div>
    </section>
    <!-- -----ÜRÜN SERGİLEME BİTİŞ------ -->

    <!-- ----Katalog---- -->
    <div class="product-heading">
      <div class="hricin">
        <h1><?php echo $baslik[0]->b_katalog; ?></h1>
        <hr style="width:500px;">
      </div>
    </div>
    <div style="display:flex; justify-content:center; text-align: center;">
      <div style="position:relative;padding-top:0;width:100%;height:900px;"><iframe style="position:absolute;border:none;width:100%;height:100%;left:0;top:0;" src="https://online.fliphtml5.com/mpctp/mwjw/" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe></div>
    </div>
    <!-- ----Katalog Bitiş---- -->
    <section id="counterSection">
      <div class="product-heading">
        <div class="hricin">
          <h1><?php echo $baslik[0]->b_nedenars; ?></h1>
          <hr style="width:500px;">
        </div>
      </div>
      <div>
        <div>
          <div class="yanipSonenKutu" style="display:flex; flex-wrap:wrap; justify-content: center; gap: 36px;">
            <div class=" card " style=" color: white; ">
              <div><iconify-icon icon="map:lawyer" width="100" height="100" style="padding: 20px;"></iconify-icon></div>
              <div>
                <h2><?php echo $language[12]->name;?></h2>
                <span id="count1" class="display-4"></span>
              </div>
            </div>
            <div class=" card " style=" color: white;">
              <div><iconify-icon icon="map:lawyer" width="100" height="100" style="padding: 20px;"></iconify-icon></div>
              <div>
                <h2><?php echo $language[13]->name;?></h2>

                <span id="count2" class="display-4"></span>
              </div>
            </div>
            <div class=" card " style=" color: white;">
              <div><iconify-icon icon="map:lawyer" width="100" height="100" style="padding: 20px;"></iconify-icon></div>
              <div>
                <h2><?php echo $language[14]->name;?></h2>

                <span id="count3" class="display-4"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ----nedenbiz---- -->


    <section>
      <div class="arkaplan">
        <div class="arkaplancontent">
          <div class="icons">
            <div class="icon">
              <iconify-icon icon="lets-icons:ticket" width="76" height="76" style="color: white;"></iconify-icon>
              <h2><?php echo $nedenbiz[0]->n_baslik1; ?></h2>
              <p style="color:white;"><?php echo $nedenbiz[0]->n_aciklama1; ?></p>
            </div>
            <div class="icon">
              <iconify-icon icon="fa6-solid:medal" width="76" height="76" style="color: white;"></iconify-icon>
              <h2><?php echo $nedenbiz[0]->n_baslik2; ?></h2>
              <p style="color:white;"><?php echo $nedenbiz[0]->n_aciklama2; ?></p>
            </div>
            <div class="icon">
              <iconify-icon icon="cil:truck" width="76" height="76" style="color: white;"></iconify-icon>
              <h2><?php echo $nedenbiz[0]->n_baslik3; ?></h2>
              <p style="color:white;"><?php echo $nedenbiz[0]->n_aciklama3; ?></p>
            </div>
            <div class="icon">
              <iconify-icon icon="material-symbols-light:handyman-outline" width="76" height="76" style="color: white;"></iconify-icon>
              <h2><?php echo $nedenbiz[0]->n_baslik4; ?></h2>
              <p style="color:white;"><?php echo $nedenbiz[0]->n_aciklama4; ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ----nedenbiz bitiş---- -->





    <script>
      let slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>
    <script type="text/javascript">
      const targetCount1 = 1500;
      const targetCount2 = 70;
      const targetCount3 = 11;

      const speed = 200;
      const count1 = document.getElementById('count1');
      const count2 = document.getElementById('count2');
      const count3 = document.getElementById('count3');

      let currentCount1 = 0;
      let currentCount2 = 0;
      let currentCount3 = 0;

      function startCount() {
        const increment1 = targetCount1 / speed;
        const increment2 = targetCount2 / speed;
        const increment3 = targetCount3 / speed;

        const interval = setInterval(() => {
          currentCount1 += increment1;
          currentCount2 += increment2;
          currentCount3 += increment3;

          count1.textContent = Math.ceil(currentCount1);
          count2.textContent = Math.ceil(currentCount2);
          count3.textContent = Math.ceil(currentCount3);

          if (
            currentCount1 >= targetCount1 ||
            currentCount2 >= targetCount2 ||
            currentCount3 >= targetCount3
          ) {
            clearInterval(interval);
            count1.textContent = targetCount1 + "+";
            count2.textContent = targetCount2 + "+";
            count3.textContent = targetCount3 + "+";
          }
        }, 1);
      }

      const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5 // Ekranda yarısı göründüğünde işlem yapacak
      };

      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            startCount();
            observer.unobserve(entry.target);
          }
        });
      }, options);

      const counterSection = document.getElementById('counterSection');
      observer.observe(counterSection);
    </script>

    <?php $this->load->view("frontend/include/footer"); ?>