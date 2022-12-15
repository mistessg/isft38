
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://dev.isft38.edu.ar/2021/blog/css/landing.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <title>ISFT N°38</title>
</head>

<style>
  @import  url('https://fonts.googleapis.com/css2?family=Overpass:wght@400;700&display=swap');

  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Overpass', sans-serif;
  }

  @media (min-width: 2140px) {
    html {
      height: 100vh;
    }
  }

  @media  all and (max-width: 600px) {
    .contenedorHeader {
      height: 100vh;
    }
  }


  ::-webkit-scrollbar {
    display: none;
  }

  span a {
    color: white;
    text-decoration: none;
  }

  body {
    width: 100vw;
    min-height: 100vh;
    position: absolute;
  }

  .footer {
    color: white;
    text-align: center;
    padding: 20px;
    min-height: calc(100vh - 40rem);
    background-color: #181818;
  }



  ul li {
    width: 100%;
    height: 100%;
  }

  .dropdown-menu {
    padding: 0 !important;
  }

  nav svg {
    margin-right: 10px;
  }


  .rogelio ul li a {
    display: flex;
    justify-content: center;
    text-align: center;
  }

  @media  all and (max-width: 1024px) {


    .nav-li {
      display: flex;
      justify-content: center;
    }
  }



  @media  screen and (max-width: 768px) {
    ul li {
      width: 100%;
      font-size: 120%;
    }

    .show {
      height: 100%;
    }

    .footin {
      display: flex;
      flex-wrap: wrap;
      text-align: center;
    }

  }

  .nav-link {
    display: flex;
    justify-content: start;
  }

  .nav-li {
    background-color: #212121;
  }


  /* botonas */


  a {
    color: #e1e1e1;
    font-weight: 800;
    cursor: pointer;
    position: relative;
    border: none;
    background: none;
    text-transform: uppercase;
    transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
    transition-duration: 400ms;
    transition-property: color;
  }

  a:focus,
  a:hover {
    color: #fefefe;
  }

  a:focus:after,
  a:hover:after {
    left: 0%;
  }

  a:after {
    content: "";
    pointer-events: none;
    bottom: -2px;
    left: 50%;
    position: absolute;
    width: 0%;
    height: 2px;
    background-color: #fff;
    transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
    transition-duration: 400ms;
    transition-property: width, left;
  }

  .nav-ul {
    display: flex;
    justify-content: center;
  }


  .menu-alumnos a {
    display: flex;
    justify-content: start;
  }
</style>

<body>
  <!-- HEADER -->
  <nav class="navbar sticky-top navbar-dark bg-dark navbar-expand-lg m-auto ">
    <div class="container-fluid">
      <a href="http://dev.isft38.edu.ar/2021/blog" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
        <img src="logo1.png" width="40px" alt="" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse rogelio" id="navbarToggleExternalContent">
        <!--<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll nav-ul" style="--bs-scroll-height: 400px;">-->
        <ul class="navbar-nav d-flex justify-content-center w-100 navbar-nav-scroll nav-ul" style="--bs-scroll-height: 400px;">

          <li class="nav-item">
            <a href="http://dev.isft38.edu.ar/2021/blog" class="nav-link border-effect">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
              </svg>
              Inicio
            </a>
          </li>
          <li class="nav-item">
            <a href="http://dev.isft38.edu.ar/2021/blog/carreras" class="nav-link border-effect">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
              </svg>
              Carreras
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z" />
              </svg>
              Alumnos
            </a>
            <ul class="dropdown-menu menu-alumnos" aria-labelledby="navbarDropdown">
              <li class="nav-li">
                <a href="http://campus.isft38.edu.ar/" class="nav-link d-flex justify-content-start">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pc-display" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
                  </svg>
                  Campus
                </a>
              </li>
              <li class="nav-li">
                <a href="http://dev.isft38.edu.ar/2021/blog/programas" class="nav-link d-flex justify-content-start">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                    <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                  </svg>
                  Programas
                </a>
              </li>
              <li class="nav-li">
                <a href="http://docs.isft38.edu.ar/" class="nav-link d-flex justify-content-start">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
                    <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
                  </svg>
                  DOCS
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="http://dev.isft38.edu.ar/2021/blog/profesores" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
              </svg>
              Profesores
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="http://dev.isft38.edu.ar/2021/blog/horariosCarrera" class="nav-link" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-smartwatch" viewBox="0 0 16 16">
                <path d="M9 5a.5.5 0 0 0-1 0v3H6a.5.5 0 0 0 0 1h2.5a.5.5 0 0 0 .5-.5V5z" />
                <path d="M4 1.667v.383A2.5 2.5 0 0 0 2 4.5v7a2.5 2.5 0 0 0 2 2.45v.383C4 15.253 4.746 16 5.667 16h4.666c.92 0 1.667-.746 1.667-1.667v-.383a2.5 2.5 0 0 0 2-2.45V8h.5a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H14v-.5a2.5 2.5 0 0 0-2-2.45v-.383C12 .747 11.254 0 10.333 0H5.667C4.747 0 4 .746 4 1.667zM4.5 3h7A1.5 1.5 0 0 1 13 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-7A1.5 1.5 0 0 1 3 11.5v-7A1.5 1.5 0 0 1 4.5 3z" />
              </svg>
              Horarios
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li class="nav-li">
                <a href="http://dev.isft38.edu.ar/2021/blog/horariosCarrera" class="nav-link d-flex justify-content-start">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                  </svg>
                  Por Carrera
                </a>
              </li>
              <li class="nav-li">
                <a href="http://dev.isft38.edu.ar/2021/blog/horariosProfesor" class="nav-link d-flex justify-content-start">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                  </svg>
                  Por Profesor
                </a>
              </li>
              <li class="nav-li">
                <a href="http://dev.isft38.edu.ar/2021/blog/horariosDiaHora" class="nav-link d-flex justify-content-start">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
                    <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                  </svg>
                  Por dia / hora
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="http://dev.isft38.edu.ar/2021/blog/contacto" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
              </svg>
              Contacto
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- HEADER -->



  
<style>
  /* * {
    overflow-x: hidden;
  } */

  .containerss {
    display: flex;
    flex-direction: column;
    width: 100%;
    padding: 30px;
    margin: 0 auto;
    justify-content: center;
  }

  .titulo h1 {
    text-align: center;
    color: white;
  }

  .texto {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }

  .texto p {
    padding: 30px;
    width: 90%;
    text-align: justify;
    color: #ffffff;
  }

  .card {
    display: flex;
    margin: 40px 40px;
    text-align: center;
  }

  .card-img-top {
    height: 250px;
    object-fit: cover;
  }

  .fondoCards {
    background-color: #f8f9f9;
    padding-top: 40px;
  }

  .card-texto {
    text-align: justify;
    margin: 0 10px;
    display: inline-block;
  }

  .card-link1 {
    position: relative;
    bottom: 20px
  }

  button {
    position: relative;
    display: inline-block;
    cursor: pointer;
    outline: none;
    border: 0;
    vertical-align: middle;
    text-decoration: none;
    background: transparent;
    padding: 0;
    font-size: inherit;
    font-family: inherit;
  }

  button.learn-more {
    width: 12rem;
    height: auto;
  }

  button.learn-more .circle {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    position: relative;
    display: block;
    margin: 0;
    width: 3rem;
    height: 3rem;
    background: #fafafa;
    border-radius: 1.625rem;
  }

  button.learn-more .circle .icon {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    background: #262626;
  }

  button.learn-more .circle .icon.arrow {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    left: 0.625rem;
    width: 1.125rem;
    height: 0.125rem;
    background: none;
  }

  .row {
    display: flex;
    justify-content: center;
  }

  .row .row-hijos {
    padding: 0;
  }

  @media (max-width:768px) {
    .row .row-hijos {
      width: 350px;
    }

    .carousel-inner img {
      height: 50vh;

    }
  }

  button.learn-more .circle .icon.arrow::before {
    position: absolute;
    content: "";
    top: -0.29rem;
    right: 0.0625rem;
    width: 0.625rem;
    height: 0.625rem;
    border-top: 0.125rem solid #262626;
    border-right: 0.125rem solid #262626;
    transform: rotate(45deg);
  }

  button.learn-more .button-text {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 0.75rem 0;
    margin: 0 0 0 1.85rem;
    color: #fafafa;
    font-weight: 700;
    line-height: 1.6;
    text-align: center;
    text-transform: uppercase;
  }

  button:hover .circle {
    width: 100%;
  }

  button:hover .circle .icon.arrow {
    background: #262626;
    transform: translate(1rem, 0);
  }

  button:hover .button-text {
    color: #262626;
  }

  /* From uiverse.io by @alexmaracinaru  */
  .cta {
    border: none;
    background: none;
  }

  .cta span {
    padding-bottom: 7px;
    letter-spacing: 4px;
    font-size: 14px;
    padding-right: 15px;
    text-transform: uppercase;
  }

  .cta svg {
    transform: translateX(-8px);
    transition: all 0.3s ease;
  }

  .cta:hover svg {
    transform: translateX(0);
  }

  .cta:active svg {
    transform: scale(0.9);
  }

  .hover-underline-animation {
    position: relative;
    color: white;
    padding-bottom: 20px;
  }

  .hover-underline-animation:after {
    content: "";
    position: absolute;
    width: 100%;
    transform: scaleX(0);
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #000000;
    transform-origin: bottom right;
    transition: transform 0.25s ease-out;
  }

  .cta:hover .hover-underline-animation:after {
    transform: scaleX(1);
    transform-origin: bottom left;
  }

  #arrow-horizontal {
    fill: white;
  }

  .sesion {
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    pointer-events: none;
    opacity: 0;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    height: 100vh;
    width: 100vw;
    transition: opacity 0.3s ease;
    overflow: auto;
    overflow: scroll;
    z-index: 2000;
  }

  .show {
    pointer-events: auto;
    opacity: 1;
  }

  .vent_sesion {
    margin: auto;
    position: relative;
    background-color: rgba(255, 255, 255);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.9);
  }

  .container-historia {
    background-image: url(historia.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
  }

  .container-objetivo {
    background-image: url(objetivo.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
  }

  .container-son {
    word-wrap: break-word;
    width: 600px;
    height: 350px;
    padding: 20px;
    overflow: auto;
  }

  @media (max-width:768px) {
    .container-son {
      width: 320px;
    }
  }

  .btn_cerrar {
    position: absolute;
    top: -20px;
    right: -20px;
    z-index: 1;
    border: none;
    cursor: pointer;
  }

  .btn_cerrar svg {
    background: white;
    border-radius: 50px;
  }

  .box-body {
    display: flex;
    justify-content: center;
    margin: 0 auto;
    padding: 30px;
  }

  @media (max-width:400px) {
    .card-novedades {
      margin: 30px 0;
    }
  }

  .imagen-card {
    width: 100%;
    height: 300px;
    object-fit: cover;
  }

  #mi-carousel {
    width: 100vw;
    height: 90vh;
  }

  @media (max-width:768px) {
    .carousel-inner img {
      height: 30vh;
    }
  }

  .carousel-inner,
  .item-active,
  .item- {
    width: 100%;
    height: 100%;
  }

  .item-active,
  .item img {
    width: 100%;
    height: 100%;
  }

  .overlay {
    color: #fff;
    position: absolute;
    z-index: 12;
    top: 10%;
    left: 0;
    width: 100%;
    text-align: left;
  }

  #present,
  .title {
    text-shadow: 0 0 0.2em #87F, 0 0 0.2em #87F;
    font-size: 2.3vw;
    width: 40%;
    text-align: center;
    position: absolute;
    top: 40%;
    left: 30%;
    z-index: 1000;
    color: #fff;
  }

  .title {
    top: 25%;
    font-size: 3vw;
    text-align: center;
  }

  #present::after {
    content: "";
    border-left: 3px solid #fff;
    height: 100%;
    animation: write 2s infinite alternate steps(14);
  }

  .bottonAutoScroll {
    width: 30%;
    position: absolute;
    bottom: 5%;
    left: 40%;
    color: #fff;
  }

  .hero__scroll {
    position: absolute;
    text-align: center;
    bottom: 60px;
    width: 200px;
    margin: auto;
    display: block;
    cursor: pointer;
    padding-bottom: 40px;
    left: 0;
    right: 0;
    text-transform: uppercase;
  }

  .hero__scroll .chevron {
    margin-top: 20px;
    display: block;
    -webkit-animation: pulse 2s infinite;
    animation: pulse 2s infinite;
    color: #FF4081;
  }

  .chevron::before {
    border-style: solid;
    border-width: 0.25em 0.25em 0 0;
    content: '';
    display: inline-block;
    height: 20px;
    position: relative;
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
    vertical-align: top;
    width: 20px;
  }

  .chevron.right:before {
    left: 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
  }

  .chevron.bottom:before {
    top: 0;
    -webkit-transform: rotate(135deg);
    -ms-transform: rotate(135deg);
    transform: rotate(135deg);
  }

  .chevron.left:before {
    left: 0.25em;
    -webkit-transform: rotate(-135deg);
    -ms-transform: rotate(-135deg);
    transform: rotate(-135deg);
  }

  i {
    text-align: center;
  }

  #cuerpoCartel {
    margin-left: -100%;
    margin-top: -100%;
  }

  @-webkit-keyframes pulse {
    0% {
      -webkit-transform: translate(0, 0);
      transform: translate(0, 0);
    }

    50% {
      -webkit-transform: translate(0, 10px);
      transform: translate(0, 10px);
    }

    100% {
      -webkit-transform: translate(0, 0);
      transform: translate(0, 0);
    }
  }

  @keyframes  pulse {
    0% {
      -webkit-transform: translate(0, 0);
      transform: translate(0, 0);
    }

    50% {
      -webkit-transform: translate(0, 10px);
      transform: translate(0, 10px);
    }

    100% {
      -webkit-transform: translate(0, 0);
      transform: translate(0, 0);
    }
  }

  @keyframes  write {
    from {
      width: 100%;
    }

    to {
      width: 0;
    }
  }

  .news,
  .news:hover {
    text-decoration: none;
    color: white;
  }
</style>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">

        <h1 class="title"> Bienvenidos </h2>
      <h2 id="present"></h2>
      <span id="cuerpoCartel">Inscripciones Abiertas 2023</span>
            <div class="carousel-item active">
        <img src="sede.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="collage1.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="collage2.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="collage3.jpg" class="d-block w-100">
      </div>
  </div>
  <span class="hero__scroll aos-init aos-animate bottonAutoScroll" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800">
    <a class="news d-none d-md-block" href="#novedades"> Novedades
      <i class="chevron bottom"></i></a>
  </span>
  <script>
    var h22 = document.getElementById('present');
    var cuerpoCartel = document.getElementById('cuerpoCartel');
    console.log("h22", h22);
    let write = (texto = '', etiqueta = '') => {
      let arrfromstr = texto.split('');
      let i = 0;
      let j = texto.length;
      etiqueta.innerHTML = '';
      let printstr = setInterval(function() {
        if (i === arrfromstr.length) {
          etiqueta.innerHTML = texto.substring(0, j);
          j--;
          if (j === 1) {
            etiqueta.innerHTML = '';
            i = 0;
            j = texto.length;
          }
        } else {
          etiqueta.innerHTML += arrfromstr[i];
          i++;
        }

      }, 200);
    };

    write(cuerpoCartel.innerHTML, h22);
  </script>
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div id="novedades" class="fondoCards">
  <!--Inicio Novedades -->
  <div class="box-novedades">
                    <div class="row">
      <!-- box-body"> -->
            <div class="card col-lg-4 col-md-10 sm-12 row-hijos">
        <div class="caja-imagen-novedades">
          <img src="http://dev.isft38.edu.ar/2021/blog/./storage/noticias/6/inscripciones-abiertas.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h4 class="card-title"><b>Oferta académica 2023</b></h4>
          <p class="card-text"><a href="http://dev.isft38.edu.ar/2021/blog/carreras">
<b>Conocé nuestras carreras</b>
</a><br/>
<a class="btn btn-primary" href="https://cfg.com.ar/sistema" target="_blank">
<b>Preinscripción online</b>
</a></p>
          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                      </div>
      </div>
                        <div class="card col-lg-4 col-md-10 sm-12 row-hijos">
        <div class="caja-imagen-novedades">
          <img src="http://dev.isft38.edu.ar/2021/blog/./storage/noticias/7/mesas-de-examen-1-scaled.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h4 class="card-title"><b>Mesas de Examen Noviembre/Diciembre</b></h4>
          <p class="card-text">Inscripciones abiertas hasta el 7/Noviembre.</p>
          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                      </div>
      </div>
          </div>
              </div>

  <!--Fin Novedades -->




  <div class="row">

    <div class="col-lg-4 col-md-10 sm-12 row-hijos m-5" style="position: relative;">
      <img class="card-img-top imagen-card" src="1.jpg" alt="Card image cap">

      <div style="position: absolute;top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <button class="learn-more">
          <span class=" circle" aria-hidden="true">
            <span class="icon arrow"></span>
          </span>
          <span class="button-text" id="btn_sesion">Historia</span>
        </button>
    </div>

    </div>

    <!--CARD 2-->

    <div class="col-lg-4 col-md-10 sm-12 row-hijos m-5" style="position: relative;">
      <img class="card-img-top imagen-card" src="2.jpg" alt="Card image cap">

        <div style="position: absolute;top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <button class="learn-more">
                <span class=" circle" aria-hidden="true">
                    <span class="icon arrow"></span>
                </span>
                <span class="button-text" id="btn_sesion2">Objetivos</span>
            </button>
        </div>
    </div>

</div>

<!-- MODALS -->

<div id="sesion" class="sesion">
  <div class="vent_sesion">

    <div class="container-historia">
      <h1>Historia</h1>
    </div>

    <div class="container-son">
      <div>
                <p>Gracias a las iniciativa de un grupo de personas, surge en el año 1972 la necesidad de la creación del Instituto de Formación Técnica Nº 38, destinado a la enseñanza técnica de nivel superior para los habitantes de nuestra zona.

Por entonces se vislumbró que la estructura interna del sector productivo, había alcanzado un grado de heterogeneidad mucho mayor que el que tuviera hasta ese momento, generando en consecuencia, un estancamiento del volumen de mano de obra especializado, para las ramas más dinámicas de la industria y el comercio. Con el objeto de satisfacer la demanda de ocupaciones que requerían niveles educacionales específicos de alta calificación, se canalizaron los objetivos al sector de servicios. También se tuvieron en cuenta la realidad económica y las crecientes aspiraciones de las personas del lugar, que deseaban mejorar su nivel técnico-formativo.

Como consecuencia del deterioro de la situación económica de nuestra zona y alrededores, cada vez fue mayor la cantidad de jóvenes egresados de escuelas secundarias que dejaban de emigrar hacia las grandes urbes en busca de una Educación Superior, volcándose a las nuevas e interesantes carreras que la región demandaba, asegurando amplios campos laborales y futuro a sus egresos.De esta manera, los estudiantes no solo no afectaban el presupuesto familiar (viajando, manteniendo viviendas en grandes ciudades) sino también podían contribuir a la economía familiar realizando alguna actividad laboral.

Este cúmulo de circunstancias ayudaron a definir los ejes que permitieron enfocar un nuevo tratamiento de la Educación Superior. Atento a lo expuesto, el 28 de noviembre de 1972 el entonces Ministerio de Educación de la Provincia de Buenos Aires emitió la resolución Nª 2965/72 que dispuso la creación del establecimiento.

Este Instituto superior, se caracterizó por la flexibilidad estructural desde que, en el año 1973, comenzó su actividad académica con el dictado de las Licenciaturas en Administración de Empresas y en administración de personal. En 1979, se reestructura con carreras de Técnicos Superiores (Análisis de Sistemas, Administración de Empresas, Seguridad e Higiene Industrial y Mantenimiento Mecánico). A partir de 1982 se inicia el dictado de las carreras de Formación Docente, comenzando con la carrera de Asistente Educacional y, en 1988, Magisterio Especializado en Educación de Adultos. Para los docentes en actividad desde 1985 se implementaron carreras con modalidad “no residentes” (Actualización Docente, Conducción de servicios Educativos, Supervisión de servicios educativos, Supervisión de Servicios Educativos y Capacitación Docente Nivel I y Nivel II). Con las mismas características se abrió en 1991 la carrera de bibliotecnología (Auxiliar, Escolar y Profesional). Paralelamente desde 1985 se inició el distado de carreras regulares como el Profesorado en Psicopedagogía y en 1992 el Profesorado de Educación Física. En 1994 se dictó Capacitación Docente nivel III, orientada especialmente a los profesores de la casa (egresados universitarios) para mejorar su quehacer pedagógico. En el mismo año se crea la Extensión Ramallo, con el dictado de las carreras Técnico Superior en Administración de Empresas y el Profesorado Especializado en jardín maternal. El curso de Operador de PC para los internos de la Unidad Penal Nª3 en la Extensión allí creada en 1991, continúa desarrollándose desde esa fecha.
A partir de 1997, el Instituto Superior Nª38 volvió a ser exclusivamente técnico y actualmente se dictan las carreras de Analista de Sistemas de Información y Analista en Administración de Empresas, en la Sede Central; Analista en Administración de Empresas y Operador de PC, en la extensión Ramallo y Operador de PC, en la Extensión Unidad Penal Nª3. En 1998 se da apertura a la carrera de Técnico Superior en Seguridad, Higiene y Control Ambiental Industrial.
La Institución pretende contar con los mejores recursos técnicos pedagógicos, y para llevar adelante esta propuesta, cuenta con profesores de primer Nivel, una tradición académica de consideración, una creciente actividad en la capacitación de su personal y un incondicional apoyo de su asociación Cooperadora y del Centro de Estudiantes.</p>
              </div>
    </div>

    <div class="btn_cerrar" id="btn_cerrar">
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black" class="bi bi-x-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
      </svg>
    </div>

  </div>
</div>



<div id="sesion2" class="sesion">
  <div class="vent_sesion">
    <div class="container-objetivo">
      <h1>Objetivos</h1>
    </div>

    <div class="container-son">
      <div>
                <p>Objetivos generales
Proporcionar a nuestros estudiantes una adecuada orientacion personal y profesional en función de los requerimientos de la Empresa, de la ciudad, la zona y la región.
Proporcionar a nuestros estudiantes la adquisición de técnicas de trabajo, intelectual que le permita acceder a la información a su uso de manera progresivamente más autonoma.
Brindar hábitos de trabajo responsable.
Preparar profesionales capacitados para competir en el mercado laboral.
Objetivos de la carreras
Formar recursos humanos capaces de insertarse laboralmente en el mercado.
Proporcionar formación especializada y de carárter interdisciplinario en las diferentes áreas de la Ciencia y Tecnología.
Promover la capacitación, actualización y especialización Técnico – Profesional.
Acceder a un permanente incremento de los niveles de calidad y eficiencia, de la Educacion Superior Técnica.
Objetivos institucionales
Proponemos una gestion institucional democrática regida por los principios de participación y transparencia, participando a los estudiantes de reuniones con el CAI, Centro de estudiantes, ya que entendemos que los estudiantes son sujetos activos en los procesos de enseñanza y aprendizaje.
Buscamos acomodar las estrategias de enseñanza a las necesidades de nuestos estudiantes, atendiendo las necesidad del alumnado respondiendo también al perfil del egresado que busca el mercado productivo y de servicio local, zonal y regional.
Tenemos como objetivo proporcionar a nuestros estudiantes una adecuada orientación profesional y una óptima capacitación.
Indicio de todas estas prácticas son los cursos que se dictan en la institución, la mayoria destinado a los estudiantes (también hay abiertos a la comunidad), como por ejemplo el curso de incendio, el de riesgo escolar o los de prevención auditiva.</p>
              </div>
    </div>

    <div class="btn_cerrar" id="btn_cerrar2">
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black" class="bi bi-x-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
      </svg>
    </div>

  </div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script type="text/javascript">
  const btn_sesion = document.getElementById('btn_sesion');
  const btn_sesion2 = document.getElementById('btn_sesion2');
  const sesion = document.getElementById('sesion');
  const sesion2 = document.getElementById('sesion2');
  const btn_cerrar = document.getElementById('btn_cerrar');
  const btn_cerrar2 = document.getElementById('btn_cerrar2');
  const texto_objetivo = document.getElementById('texto-card-objetivo');

  btn_sesion.addEventListener('click', () => {
    sesion.classList.add('show');
  });

  btn_cerrar.addEventListener('click', () => {
    sesion.classList.remove('show');
  });

  btn_sesion2.addEventListener('click', () => {
    sesion2.classList.add('show');
  });

  btn_cerrar2.addEventListener('click', () => {
    sesion2.classList.remove('show');
  });


  window.document.onload()
  texto_objetivo.trimStart();
</script>



  <!-- FOOTER -->

  <div class="footer">
    <footer>
      <div style="text-align:center">
        <p>Sede Central San Nicolás</p>
        <p>Avenida Central 1825</p>
      </div>
      <p class="text-center text-white">&copy;2022 - ISFT 38 - Análisis de Sistemas</p>
    </footer>
  </div>
  <!-- FOOTER -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>