
<?php
if(isset($_POST['accion'])){
  $identi =  $_POST['accion'];

  
if($identi == '123'){
      $output = '';
echo '
   
    <!--  -->
    <div class="blockVertical">
       <div class="blockVertical__contents ">
         
          <div class="blockVertical__content ">
             <div id="playerOverviewsTables" class="wrapper " >
                <div class="complexTableWrapper">
                   <table id="generalTable"
                      class="complexTable"
                      >
                      <thead>
                         <tr >
                            <th class="table__td table__td--rank text-center width-tiny" >
                               #
                            </th>
                            <th class="table__td table__td--averageRating text-center width-tiny" >
                               <a role="button"
                                  class="table__buttonFilter active"
                                  data-selectitem="1"
                                  data-filter=""
                                  data-target="#playerOverviewsTables"
                                  data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5BaverageRating%5D=ASC"
                                  >
                                  <abbr title="Nota media">
                                  Ranking
                                  </abbr>
                                  <span class="table__buttonFilterIcon active active--up " >
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                        <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                     </svg>
                                  </span>
                               </a>
                            </th>
                            <th class="table__td table__td--player text-left" >
                               <a role="button"
                                  class="table__buttonFilter "
                                  data-selectitem="1"
                                  data-filter=""
                                  data-target="#playerOverviewsTables"
                                  data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5Bplayer.translations.lastName%5D=ASC"
                                  >
                                  Jugador
                                  <span class="table__buttonFilterIcon  " >
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                        <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                     </svg>
                                  </span>
                               </a>
                            </th>
                            <th class="table__td table__td--team text-left width-large" >
                               <a role="button"
                                  class="table__buttonFilter "
                                  data-selectitem="1"
                                  data-filter=""
                                  data-target="#playerOverviewsTables"
                                  data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5Bteam.translations.name%5D=ASC"
                                  >
                                  Equipo
                                  <span class="table__buttonFilterIcon  " >
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                        <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                     </svg>
                                  </span>
                               </a>
                            </th>
                            <th class="table__td table__td--selection text-left width-large" >
                               <a role="button"
                                  class="table__buttonFilter "
                                  data-selectitem="1"
                                  data-filter=""
                                  data-target="#playerOverviewsTables"
                                  data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5Bselection.translations.name%5D=ASC"
                                  >
                                  Selección
                                  <span class="table__buttonFilterIcon  " >
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                        <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                     </svg>
                                  </span>
                               </a>
                            </th>
                            <th class="table__td table__td--monthly_salary text-center width-tiny" >
                               <a role="button"
                                  class="table__buttonFilter "
                                  data-selectitem="1"
                                  data-filter=""
                                  data-target="#playerOverviewsTables"
                                  data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5Bsalary%5D=ASC"
                                  >
                                  Salario
                                  <span class="table__buttonFilterIcon  " >
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                        <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                     </svg>
                                  </span>
                               </a>
                            </th>
                            <th class="table__td table__td--last_transfer_amount text-center width-tiny" >
                               <a role="button"
                                  class="table__buttonFilter "
                                  data-selectitem="1"
                                  data-filter=""
                                  data-target="#playerOverviewsTables"
                                  data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5BlastTransferAmount%5D=ASC"
                                  >
                                  <abbr title="Cantidad última traspaso">
                                  Traspaso
                                  </abbr>
                                  <span class="table__buttonFilterIcon  " >
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                        <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                     </svg>
                                  </span>
                               </a>
                            </th>
                            <th class="table__td table__td--contract_end_date text-center width-tiny" >
                               <a role="button"
                                  class="table__buttonFilter "
                                  data-selectitem="1"
                                  data-filter=""
                                  data-target="#playerOverviewsTables"
                                  data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5BcontractEndDate%5D=ASC"
                                  >
                                  Hasta
                                  <span class="table__buttonFilterIcon  " >
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                        <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                     </svg>
                                  </span>
                               </a>
                            </th>
                            <th class="table__td table__td--size text-center width-small" >
                               <a role="button"
                                  class="table__buttonFilter "
                                  data-selectitem="1"
                                  data-filter=""
                                  data-target="#playerOverviewsTables"
                                  data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5Bplayer.size%5D=ASC"
                                  >
                                  Altura
                                  <span class="table__buttonFilterIcon  " >
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                        <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                     </svg>
                                  </span>
                               </a>
                            </th>
                            <th class="table__td table__td--weight text-center width-small" >
                               <a role="button"
                                  class="table__buttonFilter "
                                  data-selectitem="1"
                                  data-filter=""
                                  data-target="#playerOverviewsTables"
                                  data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5Bplayer.weight%5D=ASC"
                                  >
                                  Peso
                                  <span class="table__buttonFilterIcon  " >
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                        <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                     </svg>
                                  </span>
                               </a>
                            </th>
                            <th class="table__td table__td--age text-center width-small" >
                               <a role="button"
                                  class="table__buttonFilter "
                                  data-selectitem="1"
                                  data-filter=""
                                  data-target="#playerOverviewsTables"
                                  data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5BrelativeAge%5D=ASC"
                                  >
                                  Edad
                                  <span class="table__buttonFilterIcon  " >
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                        <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                     </svg>
                                  </span>
                               </a>
                            </th>
                         </tr>
                      </thead>
                      <tbody>
                        <tr>
                           <td
                              class="text-center text-bold">
                              <span>
                              20
                              </span>
                           </td>
                           <td
                              >
                              <span class="rating rating--good">7.2</span>
                           </td>
                           <td
                              >
                              <a href="perfil.php?idperfil=123" class="personCardCell">
                              <span class="personCardCell__images">
                              
                              <span class="personCardCell__image">
                              <img
                                 src="data:image/jpeg;base64,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"
                                 data-src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4QChRXhpZgAASUkqAAgAAAADAA4BAgBbAAAAMgAAAJiCAgAMAAAAjQAAABIBAwABAAAAAQAAAAAAAABTcGFpbiAtIExhIExpZ2EgMTIzIF8gMjAxNy0yMDE4IC8gInIoIFNvY2llZGFkIERlcG9ydGl2YSBIdWVzY2EgKSAtICJyQ2FybG9zIEFrYXBvIE1hcnRpbmV6QlBBL01CIE1lZGlh/+0ArFBob3Rvc2hvcCAzLjAAOEJJTQQEAAAAAACPHAJQAAhNQiBNZWRpYRwCeABbU3BhaW4gLSBMYSBMaWdhIDEyMyBfIDIwMTctMjAxOCAvICJyKCBTb2NpZWRhZCBEZXBvcnRpdmEgSHVlc2NhICkgLSAickNhcmxvcyBBa2FwbyBNYXJ0aW5lehwCdAAMQlBBL01CIE1lZGlhHAJuAAxHZXR0eSBJbWFnZXMA/+EFc2h0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8APD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyI+Cgk8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgoJCTxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIgeG1sbnM6SXB0YzR4bXBDb3JlPSJodHRwOi8vaXB0Yy5vcmcvc3RkL0lwdGM0eG1wQ29yZS8xLjAveG1sbnMvIiAgIHhtbG5zOkdldHR5SW1hZ2VzR0lGVD0iaHR0cDovL3htcC5nZXR0eWltYWdlcy5jb20vZ2lmdC8xLjAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnBsdXM9Imh0dHA6Ly9ucy51c2VwbHVzLm9yZy9sZGYveG1wLzEuMC8iICB4bWxuczppcHRjRXh0PSJodHRwOi8vaXB0Yy5vcmcvc3RkL0lwdGM0eG1wRXh0LzIwMDgtMDItMjkvIiB4bWxuczp4bXBSaWdodHM9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9yaWdodHMvIiBkYzpSaWdodHM9IkJQQS9NQiBNZWRpYSIgcGhvdG9zaG9wOkNyZWRpdD0iR2V0dHkgSW1hZ2VzIiBHZXR0eUltYWdlc0dJRlQ6QXNzZXRJRD0iODcxOTE5MTk2IiB4bXBSaWdodHM6V2ViU3RhdGVtZW50PSJodHRwczovL3d3dy5nZXR0eWltYWdlcy5jb20vZXVsYT91dG1fbWVkaXVtPW9yZ2FuaWMmYW1wO3V0bV9zb3VyY2U9Z29vZ2xlJmFtcDt1dG1fY2FtcGFpZ249aXB0Y3VybCIgPgo8ZGM6Y3JlYXRvcj48cmRmOlNlcT48cmRmOmxpPk1CIE1lZGlhPC9yZGY6bGk+PC9yZGY6U2VxPjwvZGM6Y3JlYXRvcj48ZGM6ZGVzY3JpcHRpb24+PHJkZjpBbHQ+PHJkZjpsaSB4bWw6bGFuZz0ieC1kZWZhdWx0Ij5TcGFpbiAtIExhIExpZ2EgMTIzIF8gMjAxNy0yMDE4IC8gJnF1b3Q7ciggU29jaWVkYWQgRGVwb3J0aXZhIEh1ZXNjYSApIC0gJnF1b3Q7ckNhcmxvcyBBa2FwbyBNYXJ0aW5lejwvcmRmOmxpPjwvcmRmOkFsdD48L2RjOmRlc2NyaXB0aW9uPgo8cGx1czpMaWNlbnNvcj48cmRmOlNlcT48cmRmOmxpIHJkZjpwYXJzZVR5cGU9J1Jlc291cmNlJz48cGx1czpMaWNlbnNvclVSTD5odHRwczovL3d3dy5nZXR0eWltYWdlcy5jb20vZGV0YWlsLzg3MTkxOTE5Nj91dG1fbWVkaXVtPW9yZ2FuaWMmYW1wO3V0bV9zb3VyY2U9Z29vZ2xlJmFtcDt1dG1fY2FtcGFpZ249aXB0Y3VybDwvcGx1czpMaWNlbnNvclVSTD48L3JkZjpsaT48L3JkZjpTZXE+PC9wbHVzOkxpY2Vuc29yPgoJCTwvcmRmOkRlc2NyaXB0aW9uPgoJPC9yZGY6UkRGPgo8L3g6eG1wbWV0YT4KPD94cGFja2V0IGVuZD0idyI/Pgr/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYx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"
                                 alt="Carlos Akapo"
                                 width="24"        height="24"    />
                              </span>
                              </span>
                              <span class="personCardCell__infos">
                              <span class="personCardCell__name">Carlos Akapo</span>
                              <span class="personCardCell__description">
                              Defensa    </span>
                              </span>
                              </a>
                           </td>
                           <td
                              class="text-left width-large"        >
                              <a href="https://www.fichajes.com/equipo/fc-metz/" class="contentLinkCell">
                              <img
                                 src="https://tmssl.akamaized.net/images/berater_logo/normal/1116570_1644843505.png?lm=1644843505"
                                 data-src="https://tmssl.akamaized.net/images/berater_logo/normal/1116570_1644843505.png?lm=1644843505"
                                 alt="AREA SPORT TEAM
                                 "
                                 width="16"        height="16"    />
                                 AREA SPORT TEAM
                              </a>
                           </td>
                           <td
                           class="text-left width-large"        >
                           <a href="https://www.fichajes.com/equipo/fc-metz/" class="contentLinkCell text-uppercase">
                           <img
                              src="https://tmssl.akamaized.net/images/flagge/tiny/8.png?lm=1520611569"
                              data-src="https://tmssl.akamaized.net/images/flagge/tiny/8.png?lm=1520611569"
                              alt="AREA SPORT TEAM
                              "
                              width="16"        height="16"    />
                              Guinea Ecuatorial
                           </a>
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              186
                           </td>
                           <td
                              >
                              70
                           </td>
                           <td
                              >
                              21.9
                           </td>
                        </tr>
                        <tr>
                           <td
                              class="text-center text-bold"        >
                              <span>
                              20
                              </span>
                           </td>
                           <td
                              >
                              <span class="rating rating--good">7.2</span>
                           </td>
                           <td
                              >
                              <a href="https://www.fichajes.com/jugador/amadou-dia-ndiaye/" class="personCardCell ">
                              <span class="personCardCell__images">
                              <span class="personCardCell__nationalities">
                              <img
                                 src=""
                                 data-src="https://www.fichajes.com/build/images/flags-png/sen.255a1aaf.png" alt="" width="24" height="18"    />
                              </span>
                              <span class="personCardCell__image">
                              <img
                                 src=""
                                 data-src="https://assets-es.imgfoot.com/media/cache/150x150/portrait/amadou-dia-ndiaye.png"
                                 alt="Amadou N&#039;Diaye"
                                 width="24"        height="24"    />
                              </span>
                              </span>
                              <span class="personCardCell__infos">
                              <span class="personCardCell__name">Amadou N&#039;Diaye</span>
                              <span class="personCardCell__description">
                              Delantero                </span>
                              </span>
                              </a>
                           </td>
                           <td
                              class="text-left width-large"        >
                              <a href="https://www.fichajes.com/equipo/fc-metz/" class="contentLinkCell">
                              <img
                                 src=""
                                 data-src="https://assets-es.imgfoot.com/media/cache/60x60/fc-metz.png"
                                 alt="Metz"
                                 width="16"        height="16"    />
                              Metz
                              </a>
                           </td>
                           <td
                              class="text-left width-large"        >
                              <span>
                              -
                              </span>
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              186
                           </td>
                           <td
                              >
                              70
                           </td>
                           <td
                              >
                              21.9
                           </td>
                        </tr>
                        <tr>
                           <td
                              class="text-center text-bold"        >
                              <span>
                              20
                              </span>
                           </td>
                           <td
                              >
                              <span class="rating rating--good">7.2</span>
                           </td>
                           <td
                              >
                              <a href="https://www.fichajes.com/jugador/amadou-dia-ndiaye/" class="personCardCell ">
                              <span class="personCardCell__images">
                              <span class="personCardCell__nationalities">
                              <img
                                 src=""
                                 data-src="https://www.fichajes.com/build/images/flags-png/sen.255a1aaf.png" alt="" width="24" height="18"    />
                              </span>
                              <span class="personCardCell__image">
                              <img
                                 src=""
                                 data-src="https://assets-es.imgfoot.com/media/cache/150x150/portrait/amadou-dia-ndiaye.png"
                                 alt="Amadou N&#039;Diaye"
                                 width="24"        height="24"    />
                              </span>
                              </span>
                              <span class="personCardCell__infos">
                              <span class="personCardCell__name">Amadou N&#039;Diaye</span>
                              <span class="personCardCell__description">
                              Delantero                </span>
                              </span>
                              </a>
                           </td>
                           <td
                              class="text-left width-large"        >
                              <a href="https://www.fichajes.com/equipo/fc-metz/" class="contentLinkCell">
                              <img
                                 src=""
                                 data-src="https://assets-es.imgfoot.com/media/cache/60x60/fc-metz.png"
                                 alt="Metz"
                                 width="16"        height="16"    />
                              Metz
                              </a>
                           </td>
                           <td
                              class="text-left width-large"        >
                              <span>
                              -
                              </span>
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              186
                           </td>
                           <td
                              >
                              70
                           </td>
                           <td
                              >
                              21.9
                           </td>
                        </tr>
                        <tr>
                           <td
                              class="text-center text-bold"        >
                              <span>
                              20
                              </span>
                           </td>
                           <td
                              >
                              <span class="rating rating--good">7.2</span>
                           </td>
                           <td
                              >
                              <a href="https://www.fichajes.com/jugador/amadou-dia-ndiaye/" class="personCardCell ">
                              <span class="personCardCell__images">
                              <span class="personCardCell__nationalities">
                              <img
                                 src=""
                                 data-src="https://www.fichajes.com/build/images/flags-png/sen.255a1aaf.png" alt="" width="24" height="18"    />
                              </span>
                              <span class="personCardCell__image">
                              <img
                                 src=""
                                 data-src="https://assets-es.imgfoot.com/media/cache/150x150/portrait/amadou-dia-ndiaye.png"
                                 alt="Amadou N&#039;Diaye"
                                 width="24"        height="24"    />
                              </span>
                              </span>
                              <span class="personCardCell__infos">
                              <span class="personCardCell__name">Amadou N&#039;Diaye</span>
                              <span class="personCardCell__description">
                              Delantero                </span>
                              </span>
                              </a>
                           </td>
                           <td
                              class="text-left width-large"        >
                              <a href="https://www.fichajes.com/equipo/fc-metz/" class="contentLinkCell">
                              <img
                                 src=""
                                 data-src="https://assets-es.imgfoot.com/media/cache/60x60/fc-metz.png"
                                 alt="Metz"
                                 width="16"        height="16"    />
                              Metz
                              </a>
                           </td>
                           <td
                              class="text-left width-large"        >
                              <span>
                              -
                              </span>
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              186
                           </td>
                           <td
                              >
                              70
                           </td>
                           <td
                              >
                              21.9
                           </td>
                        </tr>
                        <tr>
                           <td
                              class="text-center text-bold"        >
                              <span>
                              20
                              </span>
                           </td>
                           <td
                              >
                              <span class="rating rating--good">7.2</span>
                           </td>
                           <td
                              >
                              <a href="https://www.fichajes.com/jugador/amadou-dia-ndiaye/" class="personCardCell ">
                              <span class="personCardCell__images">
                              <span class="personCardCell__nationalities">
                              <img
                                 src=""
                                 data-src="https://www.fichajes.com/build/images/flags-png/sen.255a1aaf.png" alt="" width="24" height="18"    />
                              </span>
                              <span class="personCardCell__image">
                              <img
                                 src=""
                                 data-src="https://assets-es.imgfoot.com/media/cache/150x150/portrait/amadou-dia-ndiaye.png"
                                 alt="Amadou N&#039;Diaye"
                                 width="24"        height="24"    />
                              </span>
                              </span>
                              <span class="personCardCell__infos">
                              <span class="personCardCell__name">Amadou N&#039;Diaye</span>
                              <span class="personCardCell__description">
                              Delantero                </span>
                              </span>
                              </a>
                           </td>
                           <td
                              class="text-left width-large"        >
                              <a href="https://www.fichajes.com/equipo/fc-metz/" class="contentLinkCell">
                              <img
                                 src=""
                                 data-src="https://assets-es.imgfoot.com/media/cache/60x60/fc-metz.png"
                                 alt="Metz"
                                 width="16"        height="16"    />
                              Metz
                              </a>
                           </td>
                           <td
                              class="text-left width-large"        >
                              <span>
                              -
                              </span>
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              186
                           </td>
                           <td
                              >
                              70
                           </td>
                           <td
                              >
                              21.9
                           </td>
                        </tr>
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
       </div>
    </div>
     ';

   }
   
  
     
} 

if(isset($_POST['active'])){
   $identiactive =  $_POST['active'];
   
      echo '
      '.$identiactive.'
       <!--  -->
       <div class="blockVertical">
          <div class="blockVertical__contents ">
            
             <div class="blockVertical__content ">
                <div id="playerOverviewsTables" class="wrapper " >
                   <div class="complexTableWrapper">
                      <table id="generalTable"
                         class="complexTable"
                         >
                         <thead>
                            <tr >
                               <th class="table__td table__td--rank text-center width-tiny" >
                                  #
                               </th>
                               <th class="table__td table__td--averageRating text-center width-tiny" >
                                  <a role="button"
                                     class="table__buttonFilter active"
                                     data-selectitem="1"
                                     data-filter=""
                                     data-target="#playerOverviewsTables"
                                     data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5BaverageRating%5D=ASC"
                                     >
                                     <abbr title="Nota media">
                                     ⌀ nota
                                     </abbr>
                                     <span class="table__buttonFilterIcon active active--up " >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                           <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                        </svg>
                                     </span>
                                  </a>
                               </th>
                               <th class="table__td table__td--player text-left" >
                                  <a role="button"
                                     class="table__buttonFilter "
                                     data-selectitem="1"
                                     data-filter=""
                                     data-target="#playerOverviewsTables"
                                     data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5Bplayer.translations.lastName%5D=ASC"
                                     >
                                     Jugador
                                     <span class="table__buttonFilterIcon  " >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                           <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                        </svg>
                                     </span>
                                  </a>
                               </th>
                               <th class="table__td table__td--team text-left width-large" >
                                  <a role="button"
                                     class="table__buttonFilter "
                                     data-selectitem="1"
                                     data-filter=""
                                     data-target="#playerOverviewsTables"
                                     data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5Bteam.translations.name%5D=ASC"
                                     >
                                     Equipo
                                     <span class="table__buttonFilterIcon  " >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                           <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                        </svg>
                                     </span>
                                  </a>
                               </th>
                               <th class="table__td table__td--selection text-left width-large" >
                                  <a role="button"
                                     class="table__buttonFilter "
                                     data-selectitem="1"
                                     data-filter=""
                                     data-target="#playerOverviewsTables"
                                     data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5Bselection.translations.name%5D=ASC"
                                     >
                                     Selección
                                     <span class="table__buttonFilterIcon  " >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                           <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                        </svg>
                                     </span>
                                  </a>
                               </th>
                               <th class="table__td table__td--monthly_salary text-center width-tiny" >
                                  <a role="button"
                                     class="table__buttonFilter "
                                     data-selectitem="1"
                                     data-filter=""
                                     data-target="#playerOverviewsTables"
                                     data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5Bsalary%5D=ASC"
                                     >
                                     Salario
                                     <span class="table__buttonFilterIcon  " >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                           <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                        </svg>
                                     </span>
                                  </a>
                               </th>
                               <th class="table__td table__td--last_transfer_amount text-center width-tiny" >
                                  <a role="button"
                                     class="table__buttonFilter "
                                     data-selectitem="1"
                                     data-filter=""
                                     data-target="#playerOverviewsTables"
                                     data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5BlastTransferAmount%5D=ASC"
                                     >
                                     <abbr title="Cantidad última traspaso">
                                     Traspaso
                                     </abbr>
                                     <span class="table__buttonFilterIcon  " >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                           <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                        </svg>
                                     </span>
                                  </a>
                               </th>
                               <th class="table__td table__td--contract_end_date text-center width-tiny" >
                                  <a role="button"
                                     class="table__buttonFilter "
                                     data-selectitem="1"
                                     data-filter=""
                                     data-target="#playerOverviewsTables"
                                     data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5BcontractEndDate%5D=ASC"
                                     >
                                     Hasta
                                     <span class="table__buttonFilterIcon  " >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                           <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                        </svg>
                                     </span>
                                  </a>
                               </th>
                               <th class="table__td table__td--size text-center width-small" >
                                  <a role="button"
                                     class="table__buttonFilter "
                                     data-selectitem="1"
                                     data-filter=""
                                     data-target="#playerOverviewsTables"
                                     data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5Bplayer.size%5D=ASC"
                                     >
                                     Altura
                                     <span class="table__buttonFilterIcon  " >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                           <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                        </svg>
                                     </span>
                                  </a>
                               </th>
                               <th class="table__td table__td--weight text-center width-small" >
                                  <a role="button"
                                     class="table__buttonFilter "
                                     data-selectitem="1"
                                     data-filter=""
                                     data-target="#playerOverviewsTables"
                                     data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5Bplayer.weight%5D=ASC"
                                     >
                                     Peso
                                     <span class="table__buttonFilterIcon  " >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                           <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                        </svg>
                                     </span>
                                  </a>
                               </th>
                               <th class="table__td table__td--age text-center width-small" >
                                  <a role="button"
                                     class="table__buttonFilter "
                                     data-selectitem="1"
                                     data-filter=""
                                     data-target="#playerOverviewsTables"
                                     data-api="/player_overviews/seasons/2022/general?itemsPerPage=20&amp;enablePlayerRating=1&amp;order%5BrelativeAge%5D=ASC"
                                     >
                                     Edad
                                     <span class="table__buttonFilterIcon  " >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="8" height="8">
                                           <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                        </svg>
                                     </span>
                                  </a>
                               </th>
                            </tr>
                         </thead>
                         <tbody>
                           <tr>
                              <td
                                 class="text-center text-bold"        >
                                 <span>
                                 20
                                 </span>
                              </td>
                              <td
                                 >
                                 <span class="rating rating--good">7.2</span>
                              </td>
                              <td
                                 >
                                 <a href="https://www.fichajes.com/jugador/amadou-dia-ndiaye/" class="personCardCell ">
                                 <span class="personCardCell__images">
                                 <span class="personCardCell__nationalities">
                                 <img
                                    src=""
                                    data-src="https://www.fichajes.com/build/images/flags-png/sen.255a1aaf.png" alt="" width="24" height="18"    />
                                 </span>
                                 <span class="personCardCell__image">
                                 <img
                                    src=""
                                    data-src="https://assets-es.imgfoot.com/media/cache/150x150/portrait/amadou-dia-ndiaye.png"
                                    alt="Amadou N&#039;Diaye"
                                    width="24"        height="24"    />
                                 </span>
                                 </span>
                                 <span class="personCardCell__infos">
                                 <span class="personCardCell__name">Amadou N&#039;Diaye</span>
                                 <span class="personCardCell__description">
                                 Delantero                </span>
                                 </span>
                                 </a>
                              </td>
                              <td
                                 class="text-left width-large"        >
                                 <a href="https://www.fichajes.com/equipo/fc-metz/" class="contentLinkCell">
                                 <img
                                    src=""
                                    data-src="https://assets-es.imgfoot.com/media/cache/60x60/fc-metz.png"
                                    alt="Metz"
                                    width="16"        height="16"    />
                                 Metz
                                 </a>
                              </td>
                              <td
                                 class="text-left width-large"        >
                                 <span>
                                 -
                                 </span>
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 186
                              </td>
                              <td
                                 >
                                 70
                              </td>
                              <td
                                 >
                                 21.9
                              </td>
                           </tr>
                           <tr>
                           <td
                              class="text-center text-bold"        >
                              <span>
                              20
                              </span>
                           </td>
                           <td
                              >
                              <span class="rating rating--good">7.2</span>
                           </td>
                           <td
                              >
                              <a href="https://www.fichajes.com/jugador/amadou-dia-ndiaye/" class="personCardCell ">
                              <span class="personCardCell__images">
                              <span class="personCardCell__nationalities">
                              <img
                                 src=""
                                 data-src="https://www.fichajes.com/build/images/flags-png/sen.255a1aaf.png" alt="" width="24" height="18"    />
                              </span>
                              <span class="personCardCell__image">
                              <img
                                 src=""
                                 data-src="https://assets-es.imgfoot.com/media/cache/150x150/portrait/amadou-dia-ndiaye.png"
                                 alt="Amadou N&#039;Diaye"
                                 width="24"        height="24"    />
                              </span>
                              </span>
                              <span class="personCardCell__infos">
                              <span class="personCardCell__name">Amadou N&#039;Diaye</span>
                              <span class="personCardCell__description">
                              Delantero                </span>
                              </span>
                              </a>
                           </td>
                           <td
                              class="text-left width-large"        >
                              <a href="https://www.fichajes.com/equipo/fc-metz/" class="contentLinkCell">
                              <img
                                 src=""
                                 data-src="https://assets-es.imgfoot.com/media/cache/60x60/fc-metz.png"
                                 alt="Metz"
                                 width="16"        height="16"    />
                              Metz
                              </a>
                           </td>
                           <td
                              class="text-left width-large"        >
                              <span>
                              -
                              </span>
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              -
                           </td>
                           <td
                              >
                              186
                           </td>
                           <td
                              >
                              70
                           </td>
                           <td
                              >
                              21.9
                           </td>
                        </tr>
                         <tr>
                              <td
                                 class="text-center text-bold"        >
                                 <span>
                                 20
                                 </span>
                              </td>
                              <td
                                 >
                                 <span class="rating rating--good">7.2</span>
                              </td>
                              <td
                                 >
                                 <a href="https://www.fichajes.com/jugador/amadou-dia-ndiaye/" class="personCardCell ">
                                 <span class="personCardCell__images">
                                 <span class="personCardCell__nationalities">
                                 <img
                                    src=""
                                    data-src="https://www.fichajes.com/build/images/flags-png/sen.255a1aaf.png" alt="" width="24" height="18"    />
                                 </span>
                                 <span class="personCardCell__image">
                                 <img
                                    src=""
                                    data-src="https://assets-es.imgfoot.com/media/cache/150x150/portrait/amadou-dia-ndiaye.png"
                                    alt="Amadou N&#039;Diaye"
                                    width="24"        height="24"    />
                                 </span>
                                 </span>
                                 <span class="personCardCell__infos">
                                 <span class="personCardCell__name">Amadou N&#039;Diaye</span>
                                 <span class="personCardCell__description">
                                 Delantero                </span>
                                 </span>
                                 </a>
                              </td>
                              <td
                                 class="text-left width-large"        >
                                 <a href="https://www.fichajes.com/equipo/fc-metz/" class="contentLinkCell">
                                 <img
                                    src=""
                                    data-src="https://assets-es.imgfoot.com/media/cache/60x60/fc-metz.png"
                                    alt="Metz"
                                    width="16"        height="16"    />
                                 Metz
                                 </a>
                              </td>
                              <td
                                 class="text-left width-large"        >
                                 <span>
                                 -
                                 </span>
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 186
                              </td>
                              <td
                                 >
                                 70
                              </td>
                              <td
                                 >
                                 21.9
                              </td>
                           </tr>
                            <tr>
                              <td
                                 class="text-center text-bold"        >
                                 <span>
                                 20
                                 </span>
                              </td>
                              <td
                                 >
                                 <span class="rating rating--good">7.2</span>
                              </td>
                              <td
                                 >
                                 <a href="https://www.fichajes.com/jugador/amadou-dia-ndiaye/" class="personCardCell ">
                                 <span class="personCardCell__images">
                                 <span class="personCardCell__nationalities">
                                 <img
                                    src=""
                                    data-src="https://www.fichajes.com/build/images/flags-png/sen.255a1aaf.png" alt="" width="24" height="18"    />
                                 </span>
                                 <span class="personCardCell__image">
                                 <img
                                    src=""
                                    data-src="https://assets-es.imgfoot.com/media/cache/150x150/portrait/amadou-dia-ndiaye.png"
                                    alt="Amadou N&#039;Diaye"
                                    width="24"        height="24"    />
                                 </span>
                                 </span>
                                 <span class="personCardCell__infos">
                                 <span class="personCardCell__name">Amadou N&#039;Diaye</span>
                                 <span class="personCardCell__description">
                                 Delantero                </span>
                                 </span>
                                 </a>
                              </td>
                              <td
                                 class="text-left width-large"        >
                                 <a href="https://www.fichajes.com/equipo/fc-metz/" class="contentLinkCell">
                                 <img
                                    src=""
                                    data-src="https://assets-es.imgfoot.com/media/cache/60x60/fc-metz.png"
                                    alt="Metz"
                                    width="16"        height="16"    />
                                 Metz
                                 </a>
                              </td>
                              <td
                                 class="text-left width-large"        >
                                 <span>
                                 -
                                 </span>
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 186
                              </td>
                              <td
                                 >
                                 70
                              </td>
                              <td
                                 >
                                 21.9
                              </td>
                           </tr>
                           <tr>
                              <td
                                 class="text-center text-bold"        >
                                 <span>
                                 20
                                 </span>
                              </td>
                              <td
                                 >
                                 <span class="rating rating--good">7.2</span>
                              </td>
                              <td
                                 >
                                 <a href="https://www.fichajes.com/jugador/amadou-dia-ndiaye/" class="personCardCell ">
                                 <span class="personCardCell__images">
                                 <span class="personCardCell__nationalities">
                                 <img
                                    src=""
                                    data-src="https://www.fichajes.com/build/images/flags-png/sen.255a1aaf.png" alt="" width="24" height="18"    />
                                 </span>
                                 <span class="personCardCell__image">
                                 <img
                                    src=""
                                    data-src="https://assets-es.imgfoot.com/media/cache/150x150/portrait/amadou-dia-ndiaye.png"
                                    alt="Amadou N&#039;Diaye"
                                    width="24"        height="24"    />
                                 </span>
                                 </span>
                                 <span class="personCardCell__infos">
                                 <span class="personCardCell__name">Amadou N&#039;Diaye</span>
                                 <span class="personCardCell__description">
                                 Delantero                </span>
                                 </span>
                                 </a>
                              </td>
                              <td
                                 class="text-left width-large"        >
                                 <a href="https://www.fichajes.com/equipo/fc-metz/" class="contentLinkCell">
                                 <img
                                    src=""
                                    data-src="https://assets-es.imgfoot.com/media/cache/60x60/fc-metz.png"
                                    alt="Metz"
                                    width="16"        height="16"    />
                                 Metz
                                 </a>
                              </td>
                              <td
                                 class="text-left width-large"        >
                                 <span>
                                 -
                                 </span>
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 186
                              </td>
                              <td
                                 >
                                 70
                              </td>
                              <td
                                 >
                                 21.9
                              </td>
                           </tr>
                           <tr>
                              <td
                                 class="text-center text-bold"        >
                                 <span>
                                 20
                                 </span>
                              </td>
                              <td
                                 >
                                 <span class="rating rating--good">7.2</span>
                              </td>
                              <td
                                 >
                                 <a href="https://www.fichajes.com/jugador/amadou-dia-ndiaye/" class="personCardCell ">
                                 <span class="personCardCell__images">
                                 <span class="personCardCell__nationalities">
                                 <img
                                    src=""
                                    data-src="https://www.fichajes.com/build/images/flags-png/sen.255a1aaf.png" alt="" width="24" height="18"    />
                                 </span>
                                 <span class="personCardCell__image">
                                 <img
                                    src=""
                                    data-src="https://assets-es.imgfoot.com/media/cache/150x150/portrait/amadou-dia-ndiaye.png"
                                    alt="Amadou N&#039;Diaye"
                                    width="24"        height="24"    />
                                 </span>
                                 </span>
                                 <span class="personCardCell__infos">
                                 <span class="personCardCell__name">Amadou N&#039;Diaye</span>
                                 <span class="personCardCell__description">
                                 Delantero                </span>
                                 </span>
                                 </a>
                              </td>
                              <td
                                 class="text-left width-large"        >
                                 <a href="https://www.fichajes.com/equipo/fc-metz/" class="contentLinkCell">
                                 <img
                                    src=""
                                    data-src="https://assets-es.imgfoot.com/media/cache/60x60/fc-metz.png"
                                    alt="Metz"
                                    width="16"        height="16"    />
                                 Metz
                                 </a>
                              </td>
                              <td
                                 class="text-left width-large"        >
                                 <span>
                                 -
                                 </span>
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 186
                              </td>
                              <td
                                 >
                                 70
                              </td>
                              <td
                                 >
                                 21.9
                              </td>
                           </tr>
                           <tr>
                              <td
                                 class="text-center text-bold"        >
                                 <span>
                                 20
                                 </span>
                              </td>
                              <td
                                 >
                                 <span class="rating rating--good">7.2</span>
                              </td>
                              <td
                                 >
                                 <a href="https://www.fichajes.com/jugador/amadou-dia-ndiaye/" class="personCardCell ">
                                 <span class="personCardCell__images">
                                 <span class="personCardCell__nationalities">
                                 <img
                                    src=""
                                    data-src="https://www.fichajes.com/build/images/flags-png/sen.255a1aaf.png" alt="" width="24" height="18"    />
                                 </span>
                                 <span class="personCardCell__image">
                                 <img
                                    src=""
                                    data-src="https://assets-es.imgfoot.com/media/cache/150x150/portrait/amadou-dia-ndiaye.png"
                                    alt="Amadou N&#039;Diaye"
                                    width="24"        height="24"    />
                                 </span>
                                 </span>
                                 <span class="personCardCell__infos">
                                 <span class="personCardCell__name">Amadou N&#039;Diaye</span>
                                 <span class="personCardCell__description">
                                 Delantero                </span>
                                 </span>
                                 </a>
                              </td>
                              <td
                                 class="text-left width-large"        >
                                 <a href="https://www.fichajes.com/equipo/fc-metz/" class="contentLinkCell">
                                 <img
                                    src=""
                                    data-src="https://assets-es.imgfoot.com/media/cache/60x60/fc-metz.png"
                                    alt="Metz"
                                    width="16"        height="16"    />
                                 Metz
                                 </a>
                              </td>
                              <td
                                 class="text-left width-large"        >
                                 <span>
                                 -
                                 </span>
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 186
                              </td>
                              <td
                                 >
                                 70
                              </td>
                              <td
                                 >
                                 21.9
                              </td>
                           </tr>
                           <tr>
                              <td
                                 class="text-center text-bold"        >
                                 <span>
                                 20
                                 </span>
                              </td>
                              <td
                                 >
                                 <span class="rating rating--good">7.2</span>
                              </td>
                              <td
                                 >
                                 <a href="https://www.fichajes.com/jugador/amadou-dia-ndiaye/" class="personCardCell ">
                                 <span class="personCardCell__images">
                                 <span class="personCardCell__nationalities">
                                 <img
                                    src=""
                                    data-src="https://www.fichajes.com/build/images/flags-png/sen.255a1aaf.png" alt="" width="24" height="18"    />
                                 </span>
                                 <span class="personCardCell__image">
                                 <img
                                    src=""
                                    data-src="https://assets-es.imgfoot.com/media/cache/150x150/portrait/amadou-dia-ndiaye.png"
                                    alt="Amadou N&#039;Diaye"
                                    width="24"        height="24"    />
                                 </span>
                                 </span>
                                 <span class="personCardCell__infos">
                                 <span class="personCardCell__name">Amadou N&#039;Diaye</span>
                                 <span class="personCardCell__description">
                                 Delantero                </span>
                                 </span>
                                 </a>
                              </td>
                              <td
                                 class="text-left width-large"        >
                                 <a href="https://www.fichajes.com/equipo/fc-metz/" class="contentLinkCell">
                                 <img
                                    src=""
                                    data-src="https://assets-es.imgfoot.com/media/cache/60x60/fc-metz.png"
                                    alt="Metz"
                                    width="16"        height="16"    />
                                 Metz
                                 </a>
                              </td>
                              <td
                                 class="text-left width-large"        >
                                 <span>
                                 -
                                 </span>
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 -
                              </td>
                              <td
                                 >
                                 186
                              </td>
                              <td
                                 >
                                 70
                              </td>
                              <td
                                 >
                                 21.9
                              </td>
                           </tr>
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
        ';
   
      }
   
   /*  */
   

?>
<!--  -->