 <?php if (isloggedin()) {
    echo html_writer::start_tag('div', array('id'=>'profileblock'));
    echo html_writer::tag('div', $OUTPUT->user_picture($USER, array('size'=>80)), array('class'=>'user-pic'));
	echo html_writer::start_tag('div', array('id'=>'pro-opt'));
	echo html_writer::tag('h1', get_string('loggedinas', 'moodle', $USER->firstname));
	echo $PAGE->headingmenu;
 echo $OUTPUT->lang_menu();
	echo html_writer::end_tag('p');
	echo html_writer::end_tag('div');
	echo html_writer::end_tag('div');
    } else {
 echo html_writer::start_tag('div', array('id'=>'profileblock'));
	echo html_writer::start_tag('div', array('id'=>'post-log'));
 echo html_writer::tag('h1', get_string('loggedinnot'));
 echo $PAGE->headingmenu;
	echo $OUTPUT->lang_menu();
	echo html_writer::end_tag('div');
	echo html_writer::end_tag('div');
} ?>