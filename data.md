<?php
if(isset($_POST['accion'])){
    $identi =  $_POST['accion'];
  
    
  if($identi == '123'){
        $output = '';
  echo '';

?>


<div class="group__main">
                                
                                
                                <!--  -->
                                
                                <!--  -->
                                <!--  -->
                                  <div class="blockSingle">
                                   <div class="blockSingle__container">
                                      <div class="blockSingle__title">
                                         <div class="title">
                                            <p class="title__left">Equipo actual</p>
                                         </div>
                                      </div>
                                      <div class="blockSingle__content ">
                                         <div id="" class="wrapper " >
                                            <div class="playerCurrentTeamCard">
                                               <a href="#" class="playerCurrentTeamCard__link">
                                               <span class="playerCurrentTeamCard__logo">
                                               <img
                                                  src="data:image/png;base64,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"
                                                  data-src="data:image/png;base64,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"
                                                  alt="Flamengo"
                                                  width="24" height="24"/>
                                               </span>
                                               <span class="playerCurrentTeamCard__wrapper">
                                               <span class="playerCurrentTeamCard__teamName"> San Jose Earthquakes </span>
                                               <span class="playerCurrentTeamCard__description">Estados unidos</span>
                                               </span>
                                               <span class="playerCurrentTeamCard__rank">15</span>
                                               </a>
                                            </div>
                                            <div class="table">
                                               <div class="table__row table__row--head">
                                                  <span class="table__label">Forma</span>
                                                  <strong class="table__value">
                                                     <div class="simpleTeamForm">
                                                        <div class="teamForm teamForm--l">
                                                           D
                                                        </div>
                                                        <div class="teamForm teamForm--d">
                                                           E
                                                        </div>
                                                        <div class="teamForm teamForm--l">
                                                           D
                                                        </div>
                                                     </div>
                                                  </strong>
                                               </div>
                                               <div class="table__row ">
                                                  <span class="table__label">Se unió al club el</span>
                                                  <strong class="table__value">
                                                  15/01/2019
                                                  </strong>
                                               </div>
                                               <div class="table__row ">
                                                  <span class="table__label">de</span>
                                                  <strong class="table__value">
                                                  Cruzeiro (15.00M €)
                                                  </strong>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <!--  -->
                                <!--  -->
                                
                                <div class="blockSingle">
                                   <div class="blockSingle__container">
                                      <div class="blockSingle__title">
                                         <div class="title">
                                            <p class="title__left">Trayectoria del jugador</p>
                                         </div>
                                      </div>
                                      <div class="blockSingle__content ">
                                         <div class="filtersTabs " data-tabs>
                                            <nav class="filtersTabs__links" data-tabsLinks>
                                               <a href="#club" class="filtersTabs__link active" data-tabsLink data-api="" >
                                               Equipo
                                               </a>
                                               <a href="#selection" class="filtersTabs__link " data-tabsLink data-api="" >
                                               Selección
                                               </a>
                                            </nav>
                                            <div class="filtersTabs__contents" data-tabsContents>
                                               <span class="filtersTabs__loader" data-tabsLoader>
                                                  <svg class="starAnimated" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" width="64" height="64" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                                                     <path d="M32,1.6L24.5,24.8h-24.5L19.8,39.1L12.2,62.3L32,48L51.8,62.3L44.3,39.1L64,24.8h-24.5L32,1.6v0Z" transform="matrix(0.830678 0 0 0.830678 5.418304 5.459838)" fill="none" stroke="currentColor" stroke-width="4" class="starAnimated__backgroundLine" />
                                                     <path id="eHtr1IfNndV3" d="M13.450226,24.800002L0,24.8L19.8,39.1L12.2,62.3L32,48L51.8,62.3L44.3,39.1L64,24.8h-24.5L31.999998,1.599996c0,0-5.249999,16.240003-7.499998,23.200004h-11.74801" transform="matrix(0.830678 0 0 0.830678 5.418304 5.459838)" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="square" stroke-dashoffset="244.174465" stroke-dasharray="244.174465" class="starAnimated__animatedLine" />
                                                     <path id="eHtr1IfNndV4" d="M13.450226,24.800002L0,24.8L19.8,39.1L12.2,62.3L32,48L51.8,62.3L44.3,39.1L64,24.8h-24.5L31.999998,1.599996c0,0-5.249999,16.240003-7.499998,23.200004l-9.669776.000002" transform="matrix(0.830678 0 0 0.830678 5.418304 5.459838)" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="square" stroke-dashoffset="244.174465" stroke-dasharray="244.174465" class="starAnimated__frontLine" />
                                                  </svg>
                                               </span>
                                               <div id="club" class="filtersTabs__tab active"  data-tabsContent>
                                                  <div class="complexTableWrapper">
                                                     <table id="playerStatBySeasonclub"
                                                        class="complexTable "
                                                        >
                                                        <thead>
                                                           <tr >
                                                              <th class="table__td table__td--statTableTitle text-left min-width-large" >
                                                              </th>
                                                              <th class="table__td table__td--statTablegames_played text-center width-tiny" >
                                                                 <abbr title="Nº de partidos">
                                                                 PJ
                                                                 </abbr>
                                                              </th>
                                                              <th class="table__td table__td--statTablestarts text-center width-tiny" >
                                                                 <abbr title="Titularidades">
                                                                 Tit.
                                                                 </abbr>
                                                              </th>
                                                              <th class="table__td table__td--statTablegoals text-center width-tiny" >
                                                                 <abbr title="Goles">
                                                                 G
                                                                 </abbr>
                                                              </th>
                                                              <th class="table__td table__td--statTablegoal_assists text-center width-tiny" >
                                                                 <abbr title="Asistencias">
                                                                 A
                                                                 </abbr>
                                                              </th>
                                                              <th class="table__td table__td--statTablesubstitute_on text-center width-tiny" >
                                                                 <abbr title="Entra en juego">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18" width="10" height="10">
                                                                       <path fill="#7CB342" d="M10 0v1h6.3L.6 16.6l.7.8L17 1.7V8h1V0h-8Z"/>
                                                                    </svg>
                                                                 </abbr>
                                                              </th>
                                                              <th class="table__td table__td--statTablesubstitute_off text-center width-tiny" >
                                                                 <abbr title="Cambios">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18" width="10" height="10">
                                                                       <path fill="#E53935" d="M8 18v-1H1.7L17.4 1.3l-.7-.7L1 16.3V10H0v8h8Z"/>
                                                                    </svg>
                                                                 </abbr>
                                                              </th>
                                                              <th class="table__td table__td--statTableyellow_cards text-center width-tiny" >
                                                                 <abbr title="Tarjetas amarillas">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 22" width="10" height="10">
                                                                       <path fill="transparent" class="colorYellowCardSvg" stroke="currentColor" d="M1 .5H.5v21h13V.5H1Z"/>
                                                                    </svg>
                                                                 </abbr>
                                                              </th>
                                                              <th class="table__td table__td--statTabletotal_red_cards text-center width-tiny" >
                                                                 <abbr title="Tarjetas rojas">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 22" width="10" height="10">
                                                                       <path fill="transparent" class="colorRedCardSvg" stroke="currentColor" d="M1 .5H.5v21h13V.5H1Z"/>
                                                                    </svg>
                                                                 </abbr>
                                                              </th>
                                                           </tr>
                                                        </thead>
                                                        <tbody>
                                                           <tr
                                                              data-filter="2022_3142149239300411763"  data-value="0"  data-defaultvalue="0"  data-target="#playerStatBySeasonclub tbody tr[data-2022_3142149239300411763]:not([data-filter])"         >
                                                              <td
                                                                 class="tableCellCollapsable text-left text-bold"        >
                                                                 <span class="tableCellCollapsable__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="13" height="13">
                                                                       <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                                                    </svg>
                                                                 </span>
                                                                 <span class="tableCellCollapsable__label">
                                                                 2022/2023 Flamengo
                                                                 <span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 44
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 35
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 8
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 14
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 9
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 22
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2022_3142149239300411763="1"         >
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/sudamerica/copa-libertadores/" class="contentLinkCell">
                                                                 Copa Libertadores
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 11
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 11
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 7
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2022_3142149239300411763="1"         >
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/brasil/serie-a/" class="contentLinkCell">
                                                                 Serie A
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 24
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 16
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 10
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 8
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 10
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2022_3142149239300411763="1"         >
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/brasil/copa-do-brasil/" class="contentLinkCell">
                                                                 Copa do Brasil
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 9
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 8
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 5
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-filter="2021_3142149239300411763"  data-value="1"  data-defaultvalue="0"  data-target="#playerStatBySeasonclub tbody tr[data-2021_3142149239300411763]:not([data-filter])"         >
                                                              <td
                                                                 class="tableCellCollapsable text-left text-bold"        >
                                                                 <span class="tableCellCollapsable__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="13" height="13">
                                                                       <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                                                    </svg>
                                                                 </span>
                                                                 <span class="tableCellCollapsable__label">
                                                                 2021/2022 Flamengo
                                                                 <span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 28
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 24
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 6
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 13
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 4
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 16
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 6
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2021_3142149239300411763="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/sudamerica/copa-libertadores/" class="contentLinkCell">
                                                                 Copa Libertadores
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 12
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 11
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 4
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 6
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 6
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2021_3142149239300411763="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/brasil/serie-a/" class="contentLinkCell">
                                                                 Serie A
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 14
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 11
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 6
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 8
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2021_3142149239300411763="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/brasil/copa-do-brasil/" class="contentLinkCell">
                                                                 Copa do Brasil
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-filter="2020_3142149239300411763"  data-value="1"  data-defaultvalue="0"  data-target="#playerStatBySeasonclub tbody tr[data-2020_3142149239300411763]:not([data-filter])"         >
                                                              <td
                                                                 class="tableCellCollapsable text-left text-bold"        >
                                                                 <span class="tableCellCollapsable__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="13" height="13">
                                                                       <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                                                    </svg>
                                                                 </span>
                                                                 <span class="tableCellCollapsable__label">
                                                                 2020/2021 Flamengo
                                                                 <span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 35
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 33
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 9
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 12
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 19
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2020_3142149239300411763="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/sudamerica/copa-libertadores/" class="contentLinkCell">
                                                                 Copa Libertadores
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 7
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 7
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 5
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2020_3142149239300411763="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/brasil/serie-a/" class="contentLinkCell">
                                                                 Serie A
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 28
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 26
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 8
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 9
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 14
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-filter="2019_3142149239300411763"  data-value="1"  data-defaultvalue="0"  data-target="#playerStatBySeasonclub tbody tr[data-2019_3142149239300411763]:not([data-filter])"         >
                                                              <td
                                                                 class="tableCellCollapsable text-left text-bold"        >
                                                                 <span class="tableCellCollapsable__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="13" height="13">
                                                                       <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                                                    </svg>
                                                                 </span>
                                                                 <span class="tableCellCollapsable__label">
                                                                 2019/2020 Flamengo
                                                                 <span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 36
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 33
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 15
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 17
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 23
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2019_3142149239300411763="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/sudamerica/copa-libertadores/" class="contentLinkCell">
                                                                 Copa Libertadores
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 11
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 9
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 6
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2019_3142149239300411763="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/brasil/serie-a/" class="contentLinkCell">
                                                                 Serie A
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 23
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 22
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 13
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 14
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 15
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2019_3142149239300411763="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/mundo/campeonato-mundial-de-clubes/" class="contentLinkCell">
                                                                 Campeonato Mundial de Clubes
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-filter="2018_994959724247049357"  data-value="1"  data-defaultvalue="0"  data-target="#playerStatBySeasonclub tbody tr[data-2018_994959724247049357]:not([data-filter])"         >
                                                              <td
                                                                 class="tableCellCollapsable text-left text-bold"        >
                                                                 <span class="tableCellCollapsable__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="13" height="13">
                                                                       <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                                                    </svg>
                                                                 </span>
                                                                 <span class="tableCellCollapsable__label">
                                                                 2018/2019 Cruzeiro
                                                                 <span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 29
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 23
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 9
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 6
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 6
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 7
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 4
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2018_994959724247049357="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/sudamerica/copa-libertadores/" class="contentLinkCell">
                                                                 Copa Libertadores
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 9
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 9
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2018_994959724247049357="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/brasil/serie-a/" class="contentLinkCell">
                                                                 Serie A
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 20
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 14
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 6
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 6
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 6
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 4
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 4
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-filter="2017_994959724247049357"  data-value="1"  data-defaultvalue="0"  data-target="#playerStatBySeasonclub tbody tr[data-2017_994959724247049357]:not([data-filter])"         >
                                                              <td
                                                                 class="tableCellCollapsable text-left text-bold"        >
                                                                 <span class="tableCellCollapsable__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="13" height="13">
                                                                       <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                                                    </svg>
                                                                 </span>
                                                                 <span class="tableCellCollapsable__label">
                                                                 2017/2018 Cruzeiro
                                                                 <span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 18
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 13
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 5
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 4
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2017_994959724247049357="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/sudamerica/conmebol-sudamericana/" class="contentLinkCell">
                                                                 CONMEBOL Sudamericana
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2017_994959724247049357="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/brasil/serie-a/" class="contentLinkCell">
                                                                 Serie A
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 16
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 11
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 5
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 4
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-filter="2016_994959724247049357"  data-value="1"  data-defaultvalue="0"  data-target="#playerStatBySeasonclub tbody tr[data-2016_994959724247049357]:not([data-filter])"         >
                                                              <td
                                                                 class="tableCellCollapsable text-left text-bold"        >
                                                                 <span class="tableCellCollapsable__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="13" height="13">
                                                                       <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                                                    </svg>
                                                                 </span>
                                                                 <span class="tableCellCollapsable__label">
                                                                 2016/2017 Cruzeiro
                                                                 <span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 31
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 30
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 9
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 9
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 14
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 6
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2016_994959724247049357="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/brasil/serie-a/" class="contentLinkCell">
                                                                 Serie A
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 31
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 30
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 9
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 9
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 14
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 6
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-filter="2015_994959724247049357"  data-value="1"  data-defaultvalue="0"  data-target="#playerStatBySeasonclub tbody tr[data-2015_994959724247049357]:not([data-filter])"         >
                                                              <td
                                                                 class="tableCellCollapsable text-left text-bold"        >
                                                                 <span class="tableCellCollapsable__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="13" height="13">
                                                                       <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                                                    </svg>
                                                                 </span>
                                                                 <span class="tableCellCollapsable__label">
                                                                 2015/2016 Cruzeiro
                                                                 <span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 10
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 5
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2015_994959724247049357="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/sudamerica/copa-libertadores/" class="contentLinkCell">
                                                                 Copa Libertadores
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 10
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 5
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              >
                                                              <td
                                                                 class="text-left text-bold"        >
                                                                 <span>
                                                                 Total
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 231
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 191
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 60
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 74
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 30
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 110
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 22
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                        </tbody>
                                                     </table>
                                                  </div>
                                               </div>
                                               <div id="selection" class="filtersTabs__tab "  data-tabsContent>
                                                  <div class="complexTableWrapper">
                                                     <table id="playerStatBySeasonselection"
                                                        class="complexTable "
                                                        >
                                                        <thead>
                                                           <tr >
                                                              <th class="table__td table__td--statTableTitle text-left min-width-large" >
                                                              </th>
                                                              <th class="table__td table__td--statTablegames_played text-center width-tiny" >
                                                                 <abbr title="Nº de partidos">
                                                                 PJ
                                                                 </abbr>
                                                              </th>
                                                              <th class="table__td table__td--statTablestarts text-center width-tiny" >
                                                                 <abbr title="Titularidades">
                                                                 Tit.
                                                                 </abbr>
                                                              </th>
                                                              <th class="table__td table__td--statTablegoals text-center width-tiny" >
                                                                 <abbr title="Goles">
                                                                 G
                                                                 </abbr>
                                                              </th>
                                                              <th class="table__td table__td--statTablegoal_assists text-center width-tiny" >
                                                                 <abbr title="Asistencias">
                                                                 A
                                                                 </abbr>
                                                              </th>
                                                              <th class="table__td table__td--statTablesubstitute_on text-center width-tiny" >
                                                                 <abbr title="Entra en juego">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18" width="10" height="10">
                                                                       <path fill="#7CB342" d="M10 0v1h6.3L.6 16.6l.7.8L17 1.7V8h1V0h-8Z"/>
                                                                    </svg>
                                                                 </abbr>
                                                              </th>
                                                              <th class="table__td table__td--statTablesubstitute_off text-center width-tiny" >
                                                                 <abbr title="Cambios">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18" width="10" height="10">
                                                                       <path fill="#E53935" d="M8 18v-1H1.7L17.4 1.3l-.7-.7L1 16.3V10H0v8h8Z"/>
                                                                    </svg>
                                                                 </abbr>
                                                              </th>
                                                              <th class="table__td table__td--statTableyellow_cards text-center width-tiny" >
                                                                 <abbr title="Tarjetas amarillas">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 22" width="10" height="10">
                                                                       <path fill="transparent" class="colorYellowCardSvg" stroke="currentColor" d="M1 .5H.5v21h13V.5H1Z"/>
                                                                    </svg>
                                                                 </abbr>
                                                              </th>
                                                              <th class="table__td table__td--statTabletotal_red_cards text-center width-tiny" >
                                                                 <abbr title="Tarjetas rojas">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 22" width="10" height="10">
                                                                       <path fill="transparent" class="colorRedCardSvg" stroke="currentColor" d="M1 .5H.5v21h13V.5H1Z"/>
                                                                    </svg>
                                                                 </abbr>
                                                              </th>
                                                           </tr>
                                                        </thead>
                                                        <tbody>
                                                           <tr
                                                              data-filter="2022_2073306459453910131"  data-value="0"  data-defaultvalue="0"  data-target="#playerStatBySeasonselection tbody tr[data-2022_2073306459453910131]:not([data-filter])"         >
                                                              <td
                                                                 class="tableCellCollapsable text-left text-bold"        >
                                                                 <span class="tableCellCollapsable__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="13" height="13">
                                                                       <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                                                    </svg>
                                                                 </span>
                                                                 <span class="tableCellCollapsable__label">
                                                                 2022/2023 Uruguay
                                                                 <span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 4
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2022_2073306459453910131="1"         >
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/mundo/copa-mundial/" class="contentLinkCell">
                                                                 Copa Mundial
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2022_2073306459453910131="1"         >
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/mundo/amistosos/" class="contentLinkCell">
                                                                 Amistosos
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-filter="2020_2073306459453910131"  data-value="1"  data-defaultvalue="0"  data-target="#playerStatBySeasonselection tbody tr[data-2020_2073306459453910131]:not([data-filter])"         >
                                                              <td
                                                                 class="tableCellCollapsable text-left text-bold"        >
                                                                 <span class="tableCellCollapsable__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="13" height="13">
                                                                       <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                                                    </svg>
                                                                 </span>
                                                                 <span class="tableCellCollapsable__label">
                                                                 2020/2021 Uruguay
                                                                 <span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 12
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 11
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 5
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 10
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2020_2073306459453910131="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/sudamerica/copa-america/" class="contentLinkCell">
                                                                 Copa América
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 4
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 4
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 4
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2020_2073306459453910131="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/sudamerica/eliminatorias-mundial-sudamerica/" class="contentLinkCell">
                                                                 Eliminatorias Mundial Sudamérica
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 8
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 7
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 5
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 6
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-filter="2019_2073306459453910131"  data-value="1"  data-defaultvalue="0"  data-target="#playerStatBySeasonselection tbody tr[data-2019_2073306459453910131]:not([data-filter])"         >
                                                              <td
                                                                 class="tableCellCollapsable text-left text-bold"        >
                                                                 <span class="tableCellCollapsable__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="13" height="13">
                                                                       <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                                                    </svg>
                                                                 </span>
                                                                 <span class="tableCellCollapsable__label">
                                                                 2019/2020 Uruguay
                                                                 <span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 6
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2019_2073306459453910131="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/sudamerica/copa-america/" class="contentLinkCell">
                                                                 Copa América
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2019_2073306459453910131="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/mundo/amistosos/" class="contentLinkCell">
                                                                 Amistosos
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-filter="2018_2073306459453910131"  data-value="1"  data-defaultvalue="0"  data-target="#playerStatBySeasonselection tbody tr[data-2018_2073306459453910131]:not([data-filter])"         >
                                                              <td
                                                                 class="tableCellCollapsable text-left text-bold"        >
                                                                 <span class="tableCellCollapsable__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="13" height="13">
                                                                       <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                                                    </svg>
                                                                 </span>
                                                                 <span class="tableCellCollapsable__label">
                                                                 2018/2019 Uruguay
                                                                 <span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 7
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 4
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2018_2073306459453910131="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/mundo/copa-mundial/" class="contentLinkCell">
                                                                 Copa Mundial
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2018_2073306459453910131="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/sudamerica/eliminatorias-mundial-sudamerica/" class="contentLinkCell">
                                                                 Eliminatorias Mundial Sudamérica
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2018_2073306459453910131="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/mundo/amistosos/" class="contentLinkCell">
                                                                 Amistosos
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-filter="2017_2073306459453910131"  data-value="1"  data-defaultvalue="0"  data-target="#playerStatBySeasonselection tbody tr[data-2017_2073306459453910131]:not([data-filter])"         >
                                                              <td
                                                                 class="tableCellCollapsable text-left text-bold"        >
                                                                 <span class="tableCellCollapsable__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="13" height="13">
                                                                       <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                                                    </svg>
                                                                 </span>
                                                                 <span class="tableCellCollapsable__label">
                                                                 2017/2018 Uruguay
                                                                 <span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2017_2073306459453910131="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/mundo/amistosos/" class="contentLinkCell">
                                                                 Amistosos
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-filter="2015_2073306459453910131"  data-value="1"  data-defaultvalue="0"  data-target="#playerStatBySeasonselection tbody tr[data-2015_2073306459453910131]:not([data-filter])"         >
                                                              <td
                                                                 class="tableCellCollapsable text-left text-bold"        >
                                                                 <span class="tableCellCollapsable__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 10" width="13" height="13">
                                                                       <path fill="currentColor" d="M10 .29.29 8.92l.67.75L10 1.63l9.04 8.04.67-.75L10 .29Z"/>
                                                                    </svg>
                                                                 </span>
                                                                 <span class="tableCellCollapsable__label">
                                                                 2015/2016 Uruguay
                                                                 <span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 4
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 4
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2015_2073306459453910131="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/sudamerica/copa-america/" class="contentLinkCell">
                                                                 Copa América
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              data-2015_2073306459453910131="1"         class=" hidden">
                                                              <td
                                                                 class="text-left"        >
                                                                 <a href="https://www.fichajes.com/mundo/amistosos/" class="contentLinkCell">
                                                                 Amistosos
                                                                 </a>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 1
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 3
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                           <tr
                                                              >
                                                              <td
                                                                 class="text-left text-bold"        >
                                                                 <span>
                                                                 Total
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 35
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 17
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 9
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 2
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 13
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 20
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                              <td
                                                                 class="text-center"        >
                                                                 <span>
                                                                 0
                                                                 </span>
                                                              </td>
                                                           </tr>
                                                        </tbody>
                                                     </table>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>

                                
                             </div>