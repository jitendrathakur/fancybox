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
              <li>
                <?php echo $this->Html->image('flag/usa.png', array('url' => array('controller' => 'tags', 'action' => 'index', 'language'=>'eng'))); ?>
              </li>
              <li>
                <?php echo $this->Html->image('flag/jpn.png', array('url' => array('controller' => 'tags', 'action' => 'index', 'language'=>'jpn'))); ?>
              </li>
              <li>
                <?php echo $this->Html->image('flag/ind.png', array('url' => array('controller' => 'tags', 'action' => 'index', 'language'=>'hin'))); ?>
              </li>
              <li>
                <?php echo $this->Html->image('flag/rus.png', array('url' => array('controller' => 'tags', 'action' => 'index', 'language'=>'rus'))); ?>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>