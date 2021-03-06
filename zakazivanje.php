<!DOCTYPE html>
<html lang="en">

<head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170621109-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-170621109-1');
</script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Belviso - Salon Lepote - Niš Srbija</title>
  <link rel="shortcut icon" href="images/icon.png" type="image/x-icon" />

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/aos.css" />
  <link rel="stylesheet" href="css/tail.select-default.min.css">

  <!-- Ikonice -->
  <script defer src="js/all.min.js"></script>
</head>

<style>
  * {
    overflow-x: visible !important;
  }
</style>

<body>
  <nav>
    <div class="header">
      <div class="menu-toggle">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <div class="logo">
        <h2>Belviso</h2>
      </div>
    </div>
    <div class="mobile-nav">
      <ul>
        <li><a href="index.html">Početna</a></li>
        <li><a href="usluge.html">Usluge</a></li>
        <li><a href="galerija.html">Galerija</a></li>
        <li><a href="akcije.html">Akcije</a></li>
        <li><a href="cenovnik.html">Cenovnik</a></li>
        <li class="active-nav"><a href="#">Zakazivanje tretmana</a></li>
        <li><a href="posao.html">Posao</a></li>
        <li><a href="kontakt.html">Kontakt</a></li>
      </ul>
    </div>
  </nav>

  <div class="navigacija">
    <div class="sidebar">
      <div class="logo">
        <h1>Belviso</h1>
        <p>Tamo gde lepota nije prolazna</p>
      </div>
      <ul>
        <li><a href="index.html">Početna</a></li>
        <li><a href="usluge.html">Usluge</a></li>
        <li><a href="galerija.html">Galerija</a></li>
        <li><a href="akcije.html">Akcije</a></li>
        <li><a href="cenovnik.html">Cenovnik</a></li>
        <li class="active-nav"><a href="#">Zakazivanje tretmana</a></li>
        <li><a href="posao.html">Posao</a></li>
        <li><a href="kontakt.html">Kontakt</a></li>
      </ul>
      <div class="social_media">
        <a target="_blank" href="https://www.facebook.com/belvisonis/" class="face"><i class="fab fa-facebook-f"></i></a>
        <a target="_blank" href="https://www.instagram.com/belviso_beauty_center/" class="insta"><i class="fab fa-instagram"></i></a>
        <a href="mailto: info@belviso.rs" class="email"><i class="fas fa-envelope"></i></a>
        <a href="tel:+381-63-265-266" class="phone"><i class="fas fa-phone"></i></a>
      </div>
    </div>
  </div>

  <div class="telo">
    <div class="load-container">
      <div class="loading-screen">
        <h1>Belviso</h1>
      </div>
    </div>

    <div class="zakazivanje naslov">
      <h2>Zakažite termin</h2>
    </div>

    <div class="container zakazivanje-informacije">
      <form class="" method="POST" action="zakazivanje.php">
        <div class="form-group col-xl-6">
          <label for="">Ime i Prezime</label>
          <input class="form-control" type="text" placeholder="Ime i Prezime" name="ime" required />
        </div>
        <div class="form-group col-xl-6">
          <label for="">Email Adresa</label>
          <input class="form-control" type="email" placeholder="primer@gmail.com" name="email" />
        </div>
        <div class="form-group col-xl-6">
          <label for="">Telefon</label>
          <input class="form-control" type="tel" placeholder="060123456" name="telefon" required />
        </div>
        <div class="form-group col-xl-6">
          <label for="">Datum</label>
          <input class="form-control" type="date" name="datum"  required/>
        </div>
        <div class="form-group col-xl-6 izbor-tretmana">
          <label for="">Tretmani</label>
          <br />
          <select class="" id="mselect" multiple data-placeholder="Izaberite tretmane" name="tretman[ ]" required>
            <optgroup label="Dekorativne procedure">
              <option value="MAC profesionalna šminka">MAC profesionalna šminka</option>
              <option value="MAC profesionalna sminka sa postavljanjem vestackih trepavica">MAC profesionalna sminka sa postavljanjem vestackih
                trepavica</option>
              <option value="Profesionalna šminka i nadogradnja trepavica tehnikom postavljanja pramenova">Profesionalna šminka i nadogradnja trepavica tehnikom
                postavljanja pramenova</option>
              <option value="Svilene trepavice - dlaka na dlaku">Svilene trepavice - dlaka na dlaku</option>
              <option value="Korekcija svilenih trepavica">Korekcija svilenih trepavica</option>
              <option value="Uklanjanje nadogradnje trepavica">Uklanjanje nadogradnje trepavica</option>
              <option value="Postavljanje veštačkih trepavica">Postavljanje veštačkih trepavica</option>
              <option value="Bojenje trepavica">Bojenje trepavica</option>
              <option value="Bojenje obrva">Bojenje obrva</option>
              <option value="Korekcija obrva">Korekcija obrva</option>
              <option value="Korekcija obrva i bojenje obrva">Korekcija obrva i bojenje obrva</option>
              <option value="Puder obrve">Puder obrve</option>
              <option value="Permanentni make up obrva (full colour) - mikropigmentacija sa korekcijom">Permanentni make up obrva (full colour) - mikropigmentacija
                sa korekcijom</option>
              <option value="Permanentni make up obrva - dlaka po dlaka sa korekcijom">Permanentni make up obrva - dlaka po dlaka sa
                korekcijom</option>
              <option value="Permanentni make up eyeliner gornji sa korekcijom">Permanentni make up eyeliner gornji sa korekcijom</option>
              <option value="Permanentni make up eyeliner donji i gornji sa korekcijom">Permanentni make up eyeliner donji i gornji sa
                korekcijom</option>
              <option value="Eyeliner gušće trepavice sa korekcijom">Eyeliner gušće trepavice sa korekcijom</option>
              <option value="Eyeliner gušće trepavice dvobojno sa korekcijom">Eyeliner gušće trepavice dvobojno sa korekcijom</option>
              <option value="Eyeliner linija i senčenje kapka sa korekcijom">Eyeliner linija i senčenje kapka sa korekcijom</option>
              <option value="Permanentni make up usana – konture sa korekcijom">Permanentni make up usana – konture sa korekcijom</option>
              <option value="Permanentni make up usana (full colour) – senčenje sa korekcijom">Permanentni make up usana (full colour) – senčenje sa
                korekcijom</option>
              <option value="Beauty paket - oblikovanje obrva, šminka i gel lak">Beauty paket - oblikovanje obrva, šminka i gel lak</option>
              <option value="Beauty paket trajna šminka obrva, eyeliner linije 1 i konture usana">Beauty paket trajna šminka obrva, eyeliner linije 1 i konture
                usana</option>
              <option value="Japansko iscrtavanje sa korekcijom - microblading">Japansko iscrtavanje sa korekcijom - microblading</option>
              <option value="Micro hair - mikropigmentacija skalpa">Micro hair - mikropigmentacija skalpa</option>
            </optgroup>
            <optgroup label="Manikir, pedikir i dekoracija noktiju">
              <option value="Manikir">Manikir</option>
              <option value="SPA manikir">SPA manikir</option>
              <option value="Lakiranje">Lakiranje</option>
              <option value="Nadogradnja noktiju gel tehnikom">Nadogradnja noktiju gel tehnikom</option>
              <option value="Izlivanje noktiju">Izlivanje noktiju</option>
              <option value="Korekcija nadogradnje gel tehnikom">Korekcija nadogradnje gel tehnikom</option>
              <option value="Korekcija nadogradnje – jedan nokat">Korekcija nadogradnje – jedan nokat</option>
              <option value="Ojačavanje prirodnih noktiju gelom">Ojačavanje prirodnih noktiju gelom</option>
              <option value="Dugotrajni lak – gel lak">Dugotrajni lak – gel lak</option>
              <option value="Uklanjanje nadogradnje ili gel lakova">Uklanjanje nadogradnje ili gel lakova</option>
              <option value="Estetski pedikir">Estetski pedikir</option>
              <option value="SPA pedikir">SPA pedikir</option>
              <option value="Medicinski pedikir">Medicinski pedikir</option>
              <option value="Protetika noktiju LCN gelom">Protetika noktiju LCN gelom</option>
              <option value="Protetika jednog nokta LCN gelom">Protetika jednog nokta LCN gelom</option>
              <option value="Pedikir i gel lak">Pedikir i gel lak</option>
              <option value="Gel lak na nogama">Gel lak na nogama</option>
              <option value="Pedikir i gel">Pedikir i gel</option>
              <option value="Gel na nogama">Gel na nogama</option>
              <option value="Obrada uraslog nokta">Obrada uraslog nokta</option>
              <option value="Obrada kurjeg oka">Obrada kurjeg oka</option>
              <option value="Parafinsko pakovanje ruku (stopala)">Parafinsko pakovanje ruku (stopala)</option>
            </optgroup>
            <optgroup label="Aparaturni tretmani tela">
              <option value="Presoterapija – aparaturna limfna drenaža">Presoterapija – aparaturna limfna drenaža</option>
              <option value="Kavitacija sa limfnom drenažom">Kavitacija sa limfnom drenažom</option>
              <option value="Vacum body 65">Vacum body 65</option>
              <option value="Ultra conture">Ultra conture</option>
              <option value="RF bipolar zatezanje tela – butina">RF bipolar zatezanje tela – butina</option>
              <option value="RF bipolar zatezanje tela – stomak">RF bipolar zatezanje tela – stomak</option>
              <option value="RF bipolar zatezanje tela – ruke">RF bipolar zatezanje tela – ruke</option>
              <option value="Paket tretmana za mršavljenje">Paket tretmana za mršavljenje</option>
              <option value="5 kavitacija sa limfnom drenažom + 5 Ultracontur">5 kavitacija sa limfnom drenažom + 5 Ultracontur</option>
              <option value="10 kavitacija sa limfnom drenažom + 10 Ultracontur">10 kavitacija sa limfnom drenažom + 10 Ultracontur</option>
              <option value="2 saune + 2 pakovanja (pakovanje sa algom fukus)">2 saune + 2 pakovanja (pakovanje sa algom fukus)</option>
              <option value="3 Ultracontur + 9 limfnih drenaža">3 Ultracontur + 9 limfnih drenaža</option>
              <option value="2 kavitacije + 6 limfnih drenaža + 2 saune">2 kavitacije + 6 limfnih drenaža + 2 saune</option>
              <option value="2 saune + 2 pakovanja (pakovanje sa algom fukus) + 2 masaže za mršavljenje">2 saune + 2 pakovanja (pakovanje sa algom fukus) + 2 masaže
                za mršavljenje</option>
              <option value="Paket tretmana za eliminaciju celulita">Paket tretmana za eliminaciju celulita</option>
              <option value="10 anticelulit masaža + morski piling tela + lokalizovano gel pakovanje za učvršćivanje sa algama">10 anticelulit masaža + morski piling tela + lokalizovano gel
                pakovanje za učvršćivanje sa algama</option>
              <option value="10 anticelulit masaža + 2 pakovanja">10 anticelulit masaža + 2 pakovanja</option>
              <option value="10 anticelulit masaža + 2 pakovanja + 2 saune">10 anticelulit masaža + 2 pakovanja + 2 saune</option>
              <option value="10 anticelulit masaža + 10 limfnih drenaža">10 anticelulit masaža + 10 limfnih drenaža</option>
              <option value="6 anticelulit masaža + 2 pakovanja + 2 saune">6 anticelulit masaža + 2 pakovanja + 2 saune</option>
              <option value="5 anticelulit masaža + 5 limfnih drenaža + 1 pakovanje">5 anticelulit masaža + 5 limfnih drenaža + 1
                pakovanje</option>
              <option value="3 anticelulit masaža + 1 kavitacija + 3 limfne drenaže">3 anticelulit masaža + 1 kavitacija + 3 limfne
                drenaže</option>
              <option value="Belviso paket mineralizujuće pakovanje sa toplim algama, piling lica i aplikacija maske za lice sa algama">Belviso paket mineralizujuće pakovanje sa toplim algama,
                piling lica i aplikacija maske za lice sa algama</option>
            </optgroup>
            <optgroup label="Belviso SPA">
              <option value="Finska sauna do 30 min">Finska sauna do 30 min</option>
              <option value="Finska sauna i Spa tretman tela">Finska sauna i Spa tretman tela</option>
              <option value="Finska sauna i relaksaciona masaža">Finska sauna i relaksaciona masaža</option>
              <option value="Relaksaciona masaža 90 min">Relaksaciona masaža 90 min</option>
              <option value="Relaksaciona masaža 60 min">Relaksaciona masaža 60 min</option>
              <option value="Relaksaciona masaža 30 min">Relaksaciona masaža 30 min</option>
              <option value="Terapeutska masaža 60 min">Terapeutska masaža 60 min</option>
              <option value="Terapeutska masaža 30 min">Terapeutska masaža 30 min</option>
              <option value="Ultrazvučna masaža leđa">Ultrazvučna masaža leđa</option>
              <option value="Masaža toplim vulkanskim kamenjem 60 min">Masaža toplim vulkanskim kamenjem 60 min</option>
              <option value="Masaža toplom čokoladom">Masaža toplom čokoladom</option>
              <option value="Aroma masaža">Aroma masaža</option>
              <option value="Antistres masaža">Antistres masaža</option>
              <option value="Masaža svećom">Masaža svećom</option>
              <option value="Luxuzna masaža uljem obogaćenim 23karatnim zlatom">Luxuzna masaža uljem obogaćenim 23karatnim zlatom</option>
              <option value="Kraljevska masaža">Kraljevska masaža</option>
              <option value="Sportska masaža 45min">Sportska masaža 45min</option>
              <option value="Sportska masaža 30min">Sportska masaža 30min</option>
              <option value="Anticelulit masaža">Anticelulit masaža</option>
              <option value="Maderoterapija">Maderoterapija</option>
              <option value="Masaža za detoksikaciju">Masaža za detoksikaciju</option>
              <option value="Masaža za trudnice">Masaža za trudnice</option>
              <option value="Anticelulit masaža sa finskom saunom">Anticelulit masaža sa finskom saunom</option>
              <option value="Holisticka masaža 60 min">Holisticka masaža 60 min</option>
              <option value="Holisticka masaža 90 min">Holisticka masaža 90 min</option>
              <option value="Švedska masaža 30 min">Švedska masaža 30 min</option>
              <option value="Švedska masaža 60 min">Švedska masaža 60 min</option>
              <option value="Švedska masaža 90 min">Švedska masaža 90 min</option>
              <option value="Limfna drenaža lica 60 min">Limfna drenaža lica 60 min</option>
              <option value="Limfna drenaža nogu 60 min">Limfna drenaža nogu 60 min</option>
              <option value="Limfna drenaža nogu 90 min">Limfna drenaža nogu 90 min</option>
              <option value="Limfna drenaža celog tela 90 min">Limfna drenaža celog tela 90 min</option>
              <option value="Akupresurna masaža tela 60 min">Akupresurna masaža tela 60 min</option>
              <option value="Akupresurna masaža tela 90 min">Akupresurna masaža tela 90 min</option>
              <option value="Refleksologija stopala 30 min">Refleksologija stopala 30 min</option>
              <option value="Refleksologija šaka 30 min">Refleksologija šaka 30 min</option>
              <option value="Morski piling tela i masaža">Morski piling tela i masaža</option>
              <option value="Morski piling tela i sauna">Morski piling tela i sauna</option>
              <option value="Tretman za mršavljenje sa algama">Tretman za mršavljenje sa algama</option>
              <option value="Mineralizujuće pakovanje sa toplim algama">Mineralizujuće pakovanje sa toplim algama</option>
            </optgroup>
            <optgroup label="Tretmani lica">
              <option value="Higijenski tretman lica">Higijenski tretman lica</option>
              <option value="Higijenski tretman lica sa ultrazvučnim pilingom">Higijenski tretman lica sa ultrazvučnim pilingom</option>
              <option value="Higijenski tretman lica sa enzimskim pilingom">Higijenski tretman lica sa enzimskim pilingom</option>
              <option value="Higijenski tretman lica sa aplikacijom ampule">Higijenski tretman lica sa aplikacijom ampule</option>
              <option value="Higijenski tretman čišćenja leđa">Higijenski tretman čišćenja leđa</option>
              <option value="Higijenski tretman lica sa dve maske">Higijenski tretman lica sa dve maske</option>
              <option value="Masaža lica, vrata i dekoltea">Masaža lica, vrata i dekoltea</option>
              <option value="Limfna drenaža lica i vrata">Limfna drenaža lica i vrata</option>
              <option value="Tretman lica piling, masaža i maska">Tretman lica piling, masaža i maska</option>
              <option value="Ultrazvučni piling i maska">Ultrazvučni piling i maska</option>
              <option value="Ultrazvučni piling, masaža i maska">Ultrazvučni piling, masaža i maska</option>
              <option value="Ultrazvučni piling, masaza i maska za predeo lica vrata i dekoltea">Ultrazvučni piling, masaza i maska za predeo lica vrata i
                dekoltea</option>
              <option value="Led terapija – terapija svetlom">Led terapija – terapija svetlom</option>
              <option value="Mikrodermoabrazija">Mikrodermoabrazija</option>
              <option value="Golden Glow tretman">Golden Glow tretman</option>
              <option value="Mezoporacija sa jednim koktelom">Mezoporacija sa jednim koktelom</option>
              <option value="Mezoporacija sa dva koktela">Mezoporacija sa dva koktela</option>
              <option value="Mezoporacija sa mixom koktela (3 i više)">Mezoporacija sa mixom koktela (3 i više)</option>
              <option value="Mezoterapija lica">Mezoterapija lica</option>
              <option value="Mezoterapija kose, 1/2 glave">Mezoterapija kose, 1/2 glave</option>
              <option value="Dermapen">Dermapen</option>
              <option value="Radiotalasni lifting">Radiotalasni lifting</option>
              <option value="Lasersko podmlađivanje lica">Lasersko podmlađivanje lica</option>
              <option value="Laserski tretman akni">Laserski tretman akni</option>
            </optgroup>
            <optgroup label="BB GLOW">
              <option value="BB GLOW sa serumom za pigmentaciju">BB GLOW sa serumom za pigmentaciju</option>
              <option value="BB GLOW sa serumom i mezoterapijskim koktelima">BB GLOW sa serumom i mezoterapijskim koktelima</option>
            </optgroup>
            <optgroup label="Hijaluron Pen">
              <option value="Hijaluron pen (0,5 ml hijalurona)">Hijaluron pen (0,5 ml hijalurona)</option>
              <option value="Hijaluron pen (1ml hijalurona)">Hijaluron pen (1ml hijalurona)</option>
              <option value="Hijaluron pen(2 ml hijalurona)">Hijaluron pen(2 ml hijalurona)</option>
            </optgroup>
            <optgroup label="Specijalistički tretmani – dermatolog specijalista za kožne i venerične bolesti">
              <option value="Specijalistički dermatološki pregled">Specijalistički dermatološki pregled</option>
              <option value="Hemijski piling MCCM - voćne kiseline">Hemijski piling MCCM - voćne kiseline</option>
              <option value="Srednje duboki hemijski piling lica">Srednje duboki hemijski piling lica</option>
              <option value="Hemijski piling T35P">Hemijski piling T35P</option>
              <option value="Hemijski piling lica - TCA">Hemijski piling lica - TCA</option>
              <option value="Srednje duboki hemijski piling, 1/2 leđa">Srednje duboki hemijski piling, 1/2 leđa</option>
              <option value="Hemijski piling 1/2 leđa - TCA">Hemijski piling 1/2 leđa - TCA</option>
            </optgroup>
            <optgroup label="Specijalistički tretmani – lekar specijallista plastične i rekostruktivne hirurgije">
              <option value="Dermalni fileri 1ml">Dermalni fileri 1ml</option>
              <option value="Subdermalni fileri 1ml">Subdermalni fileri 1ml</option>
              <option value="MEZONITI 3.8cm-1nit">MEZONITI 3.8cm-1nit</option>
              <option value="MEZONITI 5cm-1nit">MEZONITI 5cm-1nit</option>
              <option value="MEZONITI minimalno 20 niti">MEZONITI minimalno 20 niti</option>
              <option value="MEZONITI sa konusima - 1 nit">MEZONITI sa konusima - 1 nit</option>
              <option value="DYSPORT-BOTOX čelo, koren nosa, bore smejalice">DYSPORT-BOTOX čelo, koren nosa, bore smejalice</option>
              <option value="Redefinicija lica biosoft nitima (2 para niti)">Redefinicija lica biosoft nitima (2 para niti)</option>
              <option value="Botox protiv znojenja - šake">Botox protiv znojenja - šake</option>
              <option value="Botox protiv znojenja - pazuh">Botox protiv znojenja - pazuh</option>
              <option value="Anticelulit tretman sa mezoterapijskim koktelima">Anticelulit tretman sa mezoterapijskim koktelima</option>
              <option value="Tretman lipolize sa mezoterapijskim koktelima po regiji">Tretman lipolize sa mezoterapijskim koktelima po regiji</option>
            </optgroup>
            <optgroup label="Depilacija">
              <option value="Nausnice">Nausnice</option>
              <option value="Brada">Brada</option>
              <option value="Zulufi">Zulufi</option>
              <option value="Celo lice">Celo lice</option>
              <option value="Potkolenice">Potkolenice</option>
              <option value="Cele noge">Cele noge</option>
              <option value="Cele noge i intimna regija">Cele noge i intimna regija</option>
              <option value="Intimna regija">Intimna regija</option>
              <option value="Ruke">Ruke</option>
              <option value="Pazuh">Pazuh</option>
              <option value="Stomak">Stomak</option>
              <option value="Muškarci leđa">Muškarci leđa</option>
              <option value="Muškarci cele noge">Muškarci cele noge</option>
              <option value="Muškarci ruke">Muškarci ruke</option>
              <option value="Muškarci stomak, grudi i rameni pojas">Muškarci stomak, grudi i rameni pojas</option>
              <option value="Muškarci depilacija ledja i ramenog pojasa">Muškarci depilacija ledja i ramenog pojasa</option>
              <option value="Belviso paket cele noge, prepone, ruke i nausnice">Belviso paket cele noge, prepone, ruke i nausnice</option>
            </optgroup>
            <optgroup label="Epilacija za žene">
              <option value="Nausnice">Nausnice</option>
              <option value="Brada">Brada</option>
              <option value="Brada i nausnice">Brada i nausnice</option>
              <option value="Zulufi">Zulufi</option>
              <option value="Nausnice, brada i zulufi">Nausnice, brada i zulufi</option>
              <option value="Celo lice">Celo lice</option>
              <option value="Podlaktice">Podlaktice</option>
              <option value="Nadlaktice">Nadlaktice</option>
              <option value="Cele ruke">Cele ruke</option>
              <option value="Linija na stomaku">Linija na stomaku</option>
              <option value="Pazuh">Pazuh</option>
              <option value="Prepone">Prepone</option>
              <option value="Intimna regija">Intimna regija</option>
              <option value="Natkolenice">Natkolenice</option>
              <option value="Potkolenice">Potkolenice</option>
              <option value="Cele noge">Cele noge</option>
              <option value="Cele noge sa preponama">Cele noge sa preponama</option>
              <option value="Donji deo leđa">Donji deo leđa</option>
              <option value="Prsti na rukama">Prsti na rukama</option>
              <option value="Stopala - ris">Stopala - ris</option>
            </optgroup>
            <optgroup label="Epilacija za muškarce">
              <option value="Uši">Uši</option>
              <option value="Vrat">Vrat</option>
              <option value="Jagodice">Jagodice</option>
              <option value="Ramena">Ramena</option>
              <option value="Brada sa prednjim delom vrata">Brada sa prednjim delom vrata</option>
              <option value="Gornji deo leđa">Gornji deo leđa</option>
              <option value="Donji deo leđa">Donji deo leđa</option>
              <option value="Leđa bez ramena">Leđa bez ramena</option>
              <option value="Cela leđa i ramena">Cela leđa i ramena</option>
              <option value="Grudi">Grudi</option>
              <option value="Ceo stomak">Ceo stomak</option>
              <option value="Nadlaktica">Nadlaktica</option>
              <option value="Pazuh">Pazuh</option>
              <option value="Noge">Noge</option>
              <option value="Grudi, stomak i ramena">Grudi, stomak i ramena</option>
              <option value="Ruke">Ruke</option>
              <option value="Grudi, stomak, ramena i leđa">Grudi, stomak, ramena i leđa</option>
            </optgroup>
          </select>
        </div>
        <div class="form-group col-xl-10">
          <label>Napomene</label>
          <textarea class="form-control" rows="10" placeholder="Ukoliko imate napomene mozete ih napisati ovde" name="napomene"></textarea>
        </div>
        <button type="submit" class="btn" name="sendMailBtn">Posalji</button>

        <?php
        if (isset($_POST['sendMailBtn'])) {
          $fromEmail = 'zakazivanjetretmana@belviso.rs';
          $toEmail = 'kitanovicandrej213@gmail.com';


          $ime = $_POST['ime'];
          $email = $_POST['email'];
          $telefon = $_POST['telefon'];
          $datum = $_POST['datum'];
          $tretmani = $_POST['tretman'];
          $napomene = $_POST['napomene'];

          $tretmaniTekst = '';
          foreach ($tretmani as $imeTretmana) {
            $tretmaniTekst = $tretmaniTekst . ",  " . $imeTretmana;
          }

          $subjectName = 'Zakazivanje Tretmana ' . $ime;

          $to = $toEmail;
          $subject = $subjectName;
          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers .= 'From: ' . $fromEmail . '<' . $fromEmail . '>' . "\r\n" . 'Reply-To: ' . $fromEmail . "\r\n" . 'X-Mailer: PHP/' . phpversion();
          $message = '<!doctype html>
          <html lang="en">
          <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
          </head>
          <body>
          <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">' . $message . '</span>
            <div class="container">
                   <b>Ime i prezime: </b>' . $ime . '<br/>
                   <b>Email: </b>' . $email . '<br/>
                   <b>Broj telefona: </b>' . $telefon . '<br/>
                   <b>Datum: </b>' . $datum . '<br/>
                   <b>Tretmani: </b>' . $tretmaniTekst . '<br />
                   <b>Napomene: </b>'. $napomene .'

            </div>
          </body>
          </html>';
          $result = @mail($to, $subject, $message, $headers);

          echo '<script>alert("Termin uspesno zakazan!")</script>';
          echo '<script>window.location.href="zakazivanje.php";</script>';
        }
        ?>
      </form>
    </div>



    <div class="mapa">
      <div class="kontakt">
        <span class="test">Belviso</span>
        <h2>Kontaktirajte nas</h2>
        <div class="informacije">
          <p data-aos="fade-right">Adresa: Karadžićeva 2/1, Niš, Srbija</p>
          <p data-aos="fade-right" data-aos-delay="50">
            Telefon: <a href="tel:+381-18-202-002">018 202 002</a>
          </p>
          <p data-aos="fade-right" data-aos-delay="100">
            Mobilni: <a href="tel:+381-63-265-266">063 265 266</a>
          </p>
          <p data-aos="fade-right" data-aos-delay="150">
            Email: <a href="mailto:info@belviso.rs">info@belviso.rs</a>
          </p>
          <p data-aos="fade-right" data-aos-delay="200">
            Website: <a href="http://www.belviso.rs/">www.belviso.rs</a>
          </p>
        </div>
      </div>
      <div class="prikaz-mape">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11611.032557592753!2d21.894650595619265!3d43.319322227654354!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb8391eb93cf73ea5!2sBelviso!5e0!3m2!1sen!2srs!4v1591014733255!5m2!1sen!2srs" width="100%" height="100%" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>

    <div class="socijalne-mreze naslov">
      <h2>Zapratite nas</h2>
      <p>Budite u toku</p>
      <div class="social_media">
        <a target="_blank" href="https://www.facebook.com/belvisonis/" class="face"><i class="fab fa-facebook-f"></i></a>
        <a target="_blank" href="https://www.instagram.com/belviso_beauty_center/" class="insta"><i class="fab fa-instagram"></i></a>
        <a href="mailto: info@belviso.rs" class="email"><i class="fas fa-envelope"></i></a>
        <a href="tel:+381-63-265-266" class="phone"><i class="fas fa-phone"></i></a>
      </div>
    </div>

    <div class="podnozje">
      <p>© Copyright 2020 Belviso Kozmeticki Salon</p>
    </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/vanilla-tilt.min.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="js/nav.js"></script>

  <script src="js/tail.select-full.min.js"></script>
  <script>
    tail.select("#mselect", {})
  </script>
</body>

</html>