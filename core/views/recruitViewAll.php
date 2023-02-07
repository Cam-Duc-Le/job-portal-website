<div class="container">
  <h1 class="py-2">All job descriptions</h2>
    <?php echo "<h4>" . count($this->result['data'][0]) . " jobs availables </h4>"; ?>

    <div class="row justify-content-evenly">
      <?php
      for ($i = 0; $i < count($this->result['data'][0]); $i++) {
      ?>
        <div class="col">
          <div class="card mb-3" style="width: 18rem;">
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <h5 class="card-title"><?php echo $this->result['data'][3][$i]; ?></h5>
                </div>
                <div class="col-md-4 float-end">
                  <h5 class="text-primary">$<?php echo $this->result['data'][5][$i]; ?></h5>
                </div>
              </div>
              <p class="card-text"><?php echo $this->result['data'][2][$i]; ?></p>
              <p class="card-text"><small class="text-muted">Minimum experience: <?php echo $this->result['data'][4][$i]; ?> year(s)</small></p>
              <a href="recruit/view/<?php echo $this->result['data'][0][$i]; ?>" class="btn btn-primary">View</a>
            </div>
          </div>

        </div>
      <?php } ?>
    </div>

    <?php
    if ($_SESSION['role'] == 'employer') {
      echo '<a href="/recruit/create" class="btn btn-primary m-1">Create Post</a>';
    }
    ?>
</div>