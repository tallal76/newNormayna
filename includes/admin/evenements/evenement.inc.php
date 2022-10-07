<div class="principal">
  <h1>La liste des Evenements</h1>
  <ul>
    <li><a href="index.php?page=evenement&link=futur">Evenement avenir</a></li>
    <li><a href="index.php?page=evenement&link=today">Evenement d'aujoud'hui</a></li>
    <li><a href="index.php?page=evenement&link=past">Evenement passer</a></li>
  </ul>

  <?php


  if (isset($_GET['link'])) {
    $var = $_GET['link'];
    if ($var == "futur") {
      $requette = "select theme_event,adress_event,
    DATE_FORMAT(date_event, '%d/%m/%Y à %H:%i:%s') as date_event ,description_event,video_event from evenements where date(date_event) >CURRENT_DATE();";
    } elseif ($var == "today") {
      $requette = "select theme_event,adress_event,
    DATE_FORMAT(date_event, '%d/%m/%Y à %H:%i:%s') as date_event ,description_event,video_event from evenements where date(date_event) = CURRENT_DATE();";
    } elseif ($var == "past") {
      $requette = "select theme_event,adress_event,
    DATE_FORMAT(date_event, '%d/%m/%Y à %H:%i:%s') as date_event ,description_event,video_event from evenements where date_event  < NOW();";
    }
  } else {

    $requette = "SELECT theme_event,adress_event,
   DATE_FORMAT(date_event, '%d/%m/%Y à %H:%i:%s') as date_event ,description_event,video_event FROM evenements;";
    //$requette = "select * from evenements  ;";
  }
  //$requette = "select * from evenements  ;";//pour le teste if faut changer la date NOW() ou une date > '2022-07-22';
  $cnx = new sql();
  $requette = $cnx->afficher($requette);
  if (isset($requette) & !empty($requette)) {


    echo '<div class="container">';
    echo '<div class="box">';

    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Thème</th>';
    echo '<th>Adresse</th>';

    echo '<th>Date</th>';
    echo '<th>Description</th>';
    echo '<th>Video</th>';

    echo '</tr>';
    echo '</thead>';

    foreach ($requette as $key => $value) {

      echo '<tbody>';
      echo '<tr>';
      echo '<td data-column="Thème">' . $value['theme_event'] . '</td>';
      echo '<td data-column="Adresse">' . $value['adress_event'] . '</td>';
      echo '<td data-column="Date">' . $value['date_event'] . '</td>';
      echo '<td data-column="Description">' . $value['description_event'] . '</td>';
      echo '<td data-column="Video"> <div class="video">' . $value['video_event'] . '</div></td>';

      echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '</div>';
  } else {
    echo " <span class='waring'><strong>!!!!!! il n'ya pas d'evenement</strong></span>";
  }

  ?>
</div>