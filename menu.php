<div
        class="d-flex flex-column flex-shrink-0 p-3 bg-light "
        style="width: 280px;"
        id="prueba"
      >
        <a
          href="/"
          class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none"
        >
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
          </svg>
          <span class="fs-4">Sidebar</span>
        </a>
        <hr >
        
        <div class="dropdown">
          <a
            href="#"
            class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
            id="dropdownUser2"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="<?php echo "fotos/".$foto; ?>"
              alt=""
              width="32"
              height="32"
              class="rounded-circle me-2"
            />
            <strong><?php echo $nom;?></strong>
          </a>
          <ul
            class="dropdown-menu text-small shadow"
            aria-labelledby="dropdownUser2"
          >
            
            <li><a class="dropdown-item" href="salir.php">Sign out</a></li>
          </ul>
        </div>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link  link-dark" aria-current="page" id="miInicio">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#home" />
              </svg>
              Inicio
            </a>
          </li>
          <li>
            <a href="nuevoContacto.php" class="nav-link link-dark" id="miNuevoContacto">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#speedometer2" />
              </svg>
              Crear Nuevo Contacto
            </a>
          </li>
          <li>
            <a href="modificarContacto.php" class="nav-link link-dark" id="miModificarContacto">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#table" />
              </svg>
              Modificar Contacto
            </a>
          </li>
          <li>
            <a href="borrarContacto.php" class="nav-link link-dark" id="miBorrarContacto">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#table" />
              </svg>
              Borrar Contacto
            </a>
          </li>
          <li>
            <a href="buscarContacto.php" class="nav-link link-dark" id="miBuscarContacto">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#table" />
              </svg>
              Buscar Contacto
            </a>
          </li>
          <li>
            <a href="salir.php" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#grid" />
              </svg>
              Salir
            </a>
          </li>
        </ul>
        
      </div>

      <div class="b-example-divider"></div>
