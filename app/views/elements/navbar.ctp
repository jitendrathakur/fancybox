<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.html">Testing</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <?php echo $this->Html->link(__('Tag list', true), array('controller' => 'tags', 'action' => 'index'));?>
              </li>
              <li class="">
                <?php echo $this->Html->link(__('New Tag', true), array('controller' => 'tags', 'action' => 'add'));?>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>