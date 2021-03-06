<?php
include(APPPATH . 'views/header.php');
?>
<body>
    <?php
    include(APPPATH . 'views/navigation_bar.php');
    ?>

    <div class = "container page">
        <div class = "row">
            <div class = "col-md-offset-2 col-md-8 content-container text-center">
                <h4 class = "text-muted"><i class = "fa fa-search"></i> Search Results for <i><?php echo $keyword; ?></i></h4>
                <ul class="nav nav-pills" style = "display: inline-block;">
                    <li class="active"><a data-toggle = "pill" href = "#topic-search">ebooks</a></li>
                </ul>
            </div>
            <div class = "col-md-offset-2 col-md-8 content-container text-center">
                <div class = "tab-content">

                    <!-- TOPICS -->
                    <div id="topic-search" class="tab-pane fade in active">
                        <div id = "topic-list" class = "list-group">
                            <?php
                            if (!empty($topics)):
                                foreach ($topics as $topic):
                                    ?>
                                    <a class = "list-group-item btn btn-link list-entry" href = "topic/view/<?php echo $topic->topic_id; ?>">
                                        <h4 class = "text-info no-padding no-margin text1color" style = "display: inline-block;"><?php echo utf8_decode($topic->topic_name); ?></h4>
                                        <small><i>by <?php echo $topic->user->first_name . " " . $topic->user->last_name; ?></i></small>
                                        <div class = "pull-right">
                                            <span class = "label label-info follower-label"><i class = "fa fa-group"></i> <?php echo $topic->followers ? count($topic->followers) : '0'; ?>
                                                <i class = "fa fa-comments"></i> <?php echo $topic->post_count; ?></span>
                                        </div>
                                    </a>
                                    <?php
                                endforeach;
                            else:
                                ?>
                                <h3 class = "text-warning">No topics were found for <i><?php echo $keyword ?></i></h3>
                            <?php
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>

    