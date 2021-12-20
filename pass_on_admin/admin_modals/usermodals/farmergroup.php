<?php
include 'footandhead.php';
//$errors = array('message' => $message);

if (isset($_POST['submit'])) {
$dis = $_POST['district'];
$cou = $_POST['county'];
$scou = $_FILES['subcounty'];
$par = $_POST['parish'];
$vil = $_POST['village'];
$group_name = $_POST['group_name'];
// $time=date("Y-m-d H:i:s");
$d = [
  'farmer_group',
  'group_name', 'district', 'county', 'subcounty', 'parish', 'village',
  $group_name, $dis, $cou, $scou, $par, $vil

];
//farmer_id


  if ($dis = !"District" && $cou = !'County' && $scou = !'Sub-County' && $par = !'Parish' && $vil = !'Village') {
    if (!empty(trim($dis)) && !empty(trim($cou)) && !empty(trim($scou)) && !empty(trim($par)) && !empty(trim($vil)) && !empty(trim($group_name))) {


      $access->universal_insert($pdo, $d, '../../farmergroups.php');
    } else {
      $message = "Add missing values";
    }
  } else {


    $message = "
Enter required Input
 ";
  }
}

?>

<form action="" method="post" enctype="multipart/form-data">
  <?php
  if (isset($message)) {
    echo '<label class="text-danger" >' . $message . '</label>';
  }

  ?>

  <div class="modal-body mb-2">
    <div class="row">
      <div class="col">
        <div class="form-group mb-3">

          <?php
          $c = [$pdo, 'district'];
          $access->retriving($c);

          ?>
          <label for="stage">Choose district</label>
          <select name="district">
            <option>District</option>
            <?php foreach ($GLOBALS['dat'] as $dat => $val) : ?>
              <option value="<?= $val['district_id']; ?>">
                <?= $val['district_name']; ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>
        <!-- county -->
        <div class="form-group mb-3">
          <?php
          $c = [$pdo, 'county'];
          $access->retriving($c);

          ?>
          <label for="stage">Choose County</label>

          <?php
          // $id = $val['district_id'];
          // echo $id;
          // $access->locateValues($pdo, $id, 'county', 'dis_fk');
          ?>
          <select name="county">
            <option>County </option>
            <?php foreach ($GLOBALS['dat'] as $dat => $val) : ?>
              <option value="<?= $val['county_id']; ?>">
                <?= $val['county_name']; ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>
        <!-- s-county -->
        <div class="form-group mb-3">

          <?php
          $c = [$pdo, 'sub_county'];
          $access->retriving($c);

          ?>
          <label for="stage">Choose Sub-County</label>
          <select name="subcounty">
            <option>Sub-County</option>
            <?php foreach ($GLOBALS['dat'] as $dat => $val) : ?>
              <option value="<?= $val['sub_county_id']; ?>">
                <?= $val['sub_county_name']; ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

      </div>
      <div class="col">
        <div class="form-group mb-3">
          <?php
          $c = [$pdo, 'parish'];
          $access->retriving($c); ?>

          <label for="stage">Choose Parish</label>
          <select name="parish">
            <option>Parish</option>
            <?php foreach ($GLOBALS['dat'] as $dat => $val) : ?>
              <option value="<?= $val['parish_id']; ?>">
                <?= $val['parish_name']; ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="form-group mb-3">
          <?php
          $c = [$pdo, 'village'];
          $access->retriving($c); ?>
          <label for="stage">Choose Village</label>
          <select name="village">
            <option>Village</option>
            <?php foreach ($GLOBALS['dat'] as $dat => $val) : ?>
              <option value="<?= $val['village_id']; ?>">
                <?= $val['village_name']; ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="form-group">
          <label for="request" class="col-form-label">Group Name:</label>
          <input type="text" class="form-control" id="request" name="group_name" required>
        </div>

      </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

</form>
</div>