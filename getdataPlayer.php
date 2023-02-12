<?php
if(isset($_POST['pagina'])){
    $pagina =  $_POST['pagina'];  
  if($pagina == '1'){
        $output = '';
  echo '
  <div class="blockSingle__container">
     <div class="blockSingle__title">
        <div class="title">
           <p class="title__left">Equipo actual</p>
        </div>
     </div>
     <div class="blockSingle__content ">
        <div id="" class="wrapper " >
           <div class="playerCurrentTeamCard">
              <a href="equipo.php" class="playerCurrentTeamCard__link">
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
  </div>';
  echo ' <div class="blockSingle">
  <div class="blockSingle__container">
     <div class="blockSingle__title">
        <div class="title">
           <p class="title__left">Estadísticas principales por posición</p>
        </div>
     </div>
     <div class="blockSingle__content ">
        <div id="" class="wrapper " >
           <div class="playerPitchPositions">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 335 200" class="playerPitchPositions__field">
                 <path fill="currentColor" fill-rule="evenodd" d="M168-1h-1v77a24 24 0 0 0 0 48v77h1v-77a24 24 0 0 0 0-48V-1Zm-1 78a23 23 0 0 0 0 46v-20a3 3 0 0 1-1.6-.9 3 3 0 0 1 1.6-5V77Zm1 20V77a23 23 0 0 1 0 46v-20a3 3 0 0 0 2.3-1.9 3 3 0 0 0-2.3-4Zm-1 1a2 2 0 0 0-1 .6 2 2 0 0 0 1 3.3v-3.8Zm1 0a2 2 0 0 1 1.5 2 2 2 0 0 1-1.5 2v-4Zm168 55h-44v-31.7c-6.7-4.7-11-12-11-20.3s4.3-15.6 11-20.3V49h44v1h-43v102h43v1Zm-44-32.9a23.8 23.8 0 0 1-10-19.1c0-7.7 3.9-14.6 10-19.1v38.2Zm29 4.9h15v-1h-14V78h14v-1h-15v48Zm-14-25a1 1 0 0 0 0 2 1 1 0 0 0 0-2v-1a2 2 0 0 1 1.8 2.8 2 2 0 0 1-1.8 1.2 2 2 0 0 1-1.8-1.2 2 2 0 0 1 1-2.6l.8-.2v1ZM43 153H-1v-1h43V50H-1v-1h44v31.7c6.7 4.7 11 12 11 20.3s-4.3 15.6-11 20.3V153Zm10-52c0 7.7-3.9 14.6-10 19.1V81.9c6.1 4.5 10 11.4 10 19.1Zm-54 24h15V77H-1v1h14v46H-1v1Zm29.4-25a1 1 0 0 0-.4 0v-1a2 2 0 1 1 0 4 2 2 0 0 1 0-4v1a1 1 0 0 0 0 2 1 1 0 0 0 .4-2Z" clip-rule="evenodd" />
              </svg>
              <div class="playerPitchPositions__position playerPitchPositions__position--isMain" data-side="centre" data-position="attacking_midfielder">
                 <div class="playerPitchPositions__label">MCO</div>
              </div>
              <div class="playerPitchPositions__position " data-side="centre_left" data-position="attacking_midfielder">
                 <div class="playerPitchPositions__label">MCOI</div>
              </div>
              <div class="playerPitchPositions__position " data-side="centre_left" data-position="striker">
                 <div class="playerPitchPositions__label">SDI</div>
              </div>
              <div class="playerPitchPositions__position " data-side="left" data-position="midfielder">
                 <div class="playerPitchPositions__label">MI</div>
              </div>
              <div class="playerPitchPositions__position " data-side="left" data-position="attacking_midfielder">
                 <div class="playerPitchPositions__label">MOI</div>
              </div>
              <div class="playerPitchPositions__position " data-side="centre_left" data-position="midfielder">
                 <div class="playerPitchPositions__label">MCI</div>
              </div>
              <div class="playerPitchPositions__position " data-side="centre_right" data-position="midfielder">
                 <div class="playerPitchPositions__label">MCD</div>
              </div>
           </div>
           <div class="complexTableWrapper">
              <table id="playerPositionStatposition"
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
                       >
                       <td
                          class="text-left"        >
                          <span>
                          Sustituto
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
                       >
                       <td
                          class="text-left"        >
                          <span>
                          MCO
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
                          23
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
                          10
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
                       >
                       <td
                          class="text-left"        >
                          <span>
                          MCOI
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
                          0
                          </span>
                       </td>
                    </tr>
                    <tr
                       >
                       <td
                          class="text-left"        >
                          <span>
                          MOI
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
                          class="text-left"        >
                          <span>
                          MCI
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
                       >
                       <td
                          class="text-left"        >
                          <span>
                          MCD
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
                          class="text-left"        >
                          <span>
                          MI
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
                    </tr>
                    <tr
                       >
                       <td
                          class="text-left"        >
                          <span>
                          SDI
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
                    </tr>
                 </tbody>
              </table>
           </div>
        </div>
     </div>
  </div>
</div>';
  }
}
if(isset($_POST['det'])){
    $pagina =  $_POST['det'];
  
    
  if($pagina == '123'){
        $output = '';
    echo'<article class="articleInline ">
    <div class="articleInline__container">

                    <a class="articleInline__imageLink" href="https://www.fichajes.com/a4244483235389203822-el-curioso-caso-del-eficiente-giorgian-de-arrascaeta-p">
                    <img
                    src="https://scontent.fabj7-1.fna.fbcdn.net/v/t39.30808-6/271813830_348732343731567_3640048316564365681_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=FpHJiw6tAP4AX-JaZdy&_nc_ht=scontent.fabj7-1.fna&oh=00_AfCX4DYImrXryAVlHCd-FpblX-IuM6KrC8w5aHchCNq0jw&oe=63D8E592"
            data-src="https://scontent.fabj7-1.fna.fbcdn.net/v/t39.30808-6/271813830_348732343731567_3640048316564365681_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=FpHJiw6tAP4AX-JaZdy&_nc_ht=scontent.fabj7-1.fna&oh=00_AfCX4DYImrXryAVlHCd-FpblX-IuM6KrC8w5aHchCNq0jw&oe=63D8E592"
                                        alt="Carlos Akapo - Perfil del jugador 2023 - Transfermarkt" width="100" height="100"/>
            </a>
        
        <a class="articleInline__titleMetas" href="https://www.fichajes.com/a4244483235389203822-el-curioso-caso-del-eficiente-giorgian-de-arrascaeta-p">
            <div class="articleTitleMetas">
    <h3 class="articleTitleMetas__title ">
    Carlos Akapo - Perfil del jugador 2023 - Transfermarkt
    </h3>

    <ul class="articleTitleMetas__metas">
        
                    <li class="articleTitleMetas__competition">Copa Mundial</li>
                            <li class="articleTitleMetas__date">06/12</li>
            </ul>
</div>
        </a>

            </div>
</article>';
  }
}




                              