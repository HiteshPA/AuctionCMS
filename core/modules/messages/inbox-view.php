		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->


		<div class="page-header">
							<h1>
								Inbox
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Messages from other users
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<div class="tabbable">
											<ul id="inbox-tabs" class="inbox-tabs nav nav-tabs padding-16 tab-size-bigger tab-space-1">
												<li class="li-new-mail pull-right">
													<a data-toggle="tab" href="#write" data-target="write" class="btn-new-mail">
														<span class="btn btn-purple no-border">
															<i class="ace-icon fa fa-envelope bigger-130"></i>
															<span class="bigger-110">Write Mail</span>
														</span>
													</a>
												</li><!-- /.li-new-mail -->

												<li class="active">
													<a data-toggle="tab" href="#inbox" data-target="inbox">
														<i class="blue ace-icon fa fa-inbox bigger-130"></i>
														<span class="bigger-110">Inbox</span>
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#sent" data-target="sent">
														<i class="orange ace-icon fa fa-location-arrow bigger-130"></i>
														<span class="bigger-110">Sent</span>
													</a>
												</li>


                                                                                        </ul>

											<div class="tab-content no-border no-padding">
												<div id="inbox" class="tab-pane in active">
													<div class="message-container">
														<div id="id-message-list-navbar" class="message-navbar clearfix">
															<div class="message-bar">
																<div class="message-infobar" id="id-message-infobar">
																	<span class="blue bigger-150">Inbox</span>

																</div>

																<div class="message-toolbar hide">
																	<div class="inline position-relative align-left">
																	</div>

																	<div class="inline position-relative align-left">


																	</div>


																</div>
															</div>


														</div>

														<div id="id-message-item-navbar" class="hide message-navbar clearfix">
															<div class="message-bar">
																<div class="message-toolbar">
																	<div class="inline position-relative align-left">

                                                                                                                                        </div>																	</div>

																	<div class="inline position-relative align-left">

																	</div>


																</div>
															</div>

															<div>
																<div class="messagebar-item-left">
																	<a href="#" class="btn-back-message-list">
																	<!--	<i class="ace-icon fa fa-arrow-left blue bigger-110 middle"></i>-->
															<!--			<b class="bigger-110 middle">Back</b>-->
																	</a>
																</div>


															</div>
														</div>

														<div id="id-message-new-navbar" class="hide message-navbar clearfix">
															<div class="message-bar">
																<div class="message-toolbar">



																</div>
															</div>

															<div>
																<div class="messagebar-item-left">
																	<a href="#" class="btn-back-message-list">
																		<i class="ace-icon fa fa-arrow-left bigger-110 middle blue"></i>
																		<b class="middle bigger-110">Back</b>
																	</a>
																</div>

																	</span>
																</div>
															</div>
														</div>

														<div class="message-list-container">
															<div class="message-list" id="message-list">

                									<!--Start loop of messages-->
                                  <?
																	include './process/messages.php';
																		foreach ($rows as $row) {
																				if(1==$row["unread"]){	?>
																					<div class="message-item message-unread">
																				<?}else{?>
																					<div>
																				<?}?>

																				<span class="sender" title="John Doe">
																							<?=get_rows_where($conn,"table_users",array("name"),"id=".$row["sender"])[0]["name"]?>

																				</span>
																				<?
																				$time = strtotime($row["sent_at"]);
																				if(date('Y/m/d',$time)==date('Y/m/d'))
																					$sent_at = date('h:iA',$time);
																				else
																					$sent_at = date('Y/m/d',$time)
																				?>
																				<span class="time"><?=$sent_at?></span>



																				<span class="summary">

																					<span class="text">
																						<?=$row["subject"]?>
																					</span>
																				</span>
																			</div>


																			<?			}
																	?>

																	<!--<div class="message-item message-unread">

																	<span class="sender" title="John Doe">
																		John Doe

																	</span>
																	<span class="time">7:15 pm</span>



																	<span class="summary">

																		<span class="text">
																			Click to open this message right here
																		</span>
																	</span>
																</div>
                                                                                                                                <div class="message-item">
                            <div>                                                                                                       <div>
																	<span class="sender" title="John Doe">
																		John Doe

																	</span>
																	<span class="time">7:15 pm</span>



																	<span class="summary">

																		<span class="text">
																			Click to open this message right here
																		</span>
																	</span>
																</div>
-->
															</div>
														</div>



														</div>
													</div>
												</div>
											</div><!-- /.tab-content -->
										</div><!-- /.tabbable -->
									</div><!-- /.col -->
								</div><!-- /.row -->

								<form id="id-message-form" class="hide form-horizontal message-form col-xs-12" action="process/send-message.php" method="post">
									<div class="messagebar-item-right">
										<span class="inline btn-send-message">
											<button type="submit" class="btn btn-sm btn-primary no-border btn-white btn-round">
												<span class="bigger-110">Send</span>

												<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
											</button>
										</span>
									</div>
									<div>
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">Recipient:</label>

											<div class="col-sm-9">
												<span class="input-icon">
													<input type="email" name="recipient" id="form-field-recipient" data-value="alex@doe.com" value="alex@doe.com" placeholder="Recipient(s)" />
													<i class="ace-icon fa fa-user"></i>
												</span>
											</div>
										</div>

										<div class="hr hr-18 dotted"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-subject">Subject:</label>

											<div class="col-sm-6 col-xs-12">
												<div class="input-icon block col-xs-12 no-padding">
													<input maxlength="100" type="text" class="col-xs-12" name="subject" id="form-field-subject" placeholder="Subject" />
													<i class="ace-icon fa fa-comment-o"></i>
												</div>
											</div>
										</div>

										<div class="hr hr-18 dotted"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="message">Message:</label>
											<div class="col-sm-9">
												<div>
													<textarea cols="80" rows="18" name="message"></textarea>
												</div>
											</div>
										</div>

										<div class="hr hr-18 dotted"></div>

										<div class="form-group no-margin-bottom">

										</div>



										<div class="space"></div>
									</div>
								</form>

								<div class="hide message-content" id="id-message-content">
									<div class="message-header clearfix">
										<div class="pull-left">
											<span class="blue bigger-125"> Clik to open this message </span>

											<div class="space-4"></div>


											&nbsp;

											&nbsp;
											<a href="#" class="sender">John Doe</a>

											&nbsp;
											<i class="ace-icon fa fa-clock-o bigger-110 orange middle"></i>
											<span class="time grey">Today, 7:15 pm</span>
										</div>

									</div>

									<div class="hr hr-double"></div>

									<div class="message-body">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>

										<p>
											Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										</p>

										<p>
											Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
										</p>

										<p>
											Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>

										<p>
											Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
										</p>

										<p>
											Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										</p>
									</div>

									<div class="hr hr-double"></div>


								</div><!-- /.message-content -->
<!-- /.message-content -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						<!-- /.row -->
					<!-- /.page-content -->


			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>


		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($){

				//handling tabs and loading/displaying relevant messages and forms
				//not needed if using the alternative view, as described in docs
				$('#inbox-tabs a[data-toggle="tab"]').on('show.bs.tab', function (e) {
					var currentTab = $(e.target).data('target');
					if(currentTab === 'write') {
						Inbox.show_form();
					}
					else if(currentTab === 'inbox') {
						Inbox.show_list();
					}

				})



				//basic initializations
				$('.message-list .message-item input[type=checkbox]').removeAttr('checked');
				$('.message-list').on('click', '.message-item input[type=checkbox]' , function() {
					$(this).closest('.message-item').toggleClass('selected');
					if(this.checked) Inbox.display_bar(1);//display action toolbar when a message is selected
					else {
						Inbox.display_bar($('.message-list input[type=checkbox]:checked').length);
						//determine number of selected messages and display/hide action toolbar accordingly
					}
				});


				//check/uncheck all messages
				$('#id-toggle-all').removeAttr('checked').on('click', function(){
					if(this.checked) {
						Inbox.select_all();
					} else Inbox.select_none();
				});

				//select all
				$('#id-select-message-all').on('click', function(e) {
					e.preventDefault();
					Inbox.select_all();
				});

				//select none
				$('#id-select-message-none').on('click', function(e) {
					e.preventDefault();
					Inbox.select_none();
				});

				//select read
				$('#id-select-message-read').on('click', function(e) {
					e.preventDefault();
					Inbox.select_read();
				});

				//select unread
				$('#id-select-message-unread').on('click', function(e) {
					e.preventDefault();
					Inbox.select_unread();
				});

				/////////

				//display first message in a new area
//				$('.message-list .message-item:eq(0) .text').on('click', function() {
//					//show the loading icon
//					$('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
//
//					$('.message-inline-open').removeClass('message-inline-open').find('.message-content').remove();
//
//					var message_list = $(this).closest('.message-list');
//
//					$('#inbox-tabs a[href="#inbox"]').parent().removeClass('active');
//					//some waiting
//					setTimeout(function() {
//
//						//hide everything that is after .message-list (which is either .message-content or .message-form)
//						message_list.next().addClass('hide');
//						$('.message-container').find('.message-loading-overlay').remove();
//
//						//close and remove the inline opened message if any!
//
//						//hide all navbars
//						$('.message-navbar').addClass('hide');
//						//now show the navbar for single message item
//						$('#id-message-item-navbar').removeClass('hide');
//
//						//hide all footers
//						$('.message-footer').addClass('hide');
//						//now show the alternative footer
//						$('.message-footer-style2').removeClass('hide');
//
//
//						//move .message-content next to .message-list and hide .message-list
//						$('.message-content').removeClass('hide').insertAfter(message_list.addClass('hide'));
//
//						//add scrollbars to .message-body
//						$('.message-content .message-body').ace_scroll({
//							size: 150,
//							mouseWheelLock: true,
//							styleClass: 'scroll-visible'
//						});
//
//					}, 500 + parseInt(Math.random() * 500));
//				});
//
//
				//display second message right inside the message list
				$('.message-list .message-item .text').on('click', function(){
					var message = $(this).closest('.message-item');

					//if message is open, then close it
					if(message.hasClass('message-inline-open')) {
						message.removeClass('message-inline-open').find('.message-content').remove();
						return;
					}

					$('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
					setTimeout(function() {
						$('.message-container').find('.message-loading-overlay').remove();
						message
							.addClass('message-inline-open')
							.append('<div class="message-content" />')
						var content = message.find('.message-content:last').html( $('#id-message-content').html() );

						//remove scrollbar elements
						content.find('.scroll-track').remove();
						content.find('.scroll-content').children().unwrap();

						content.find('.message-body').ace_scroll({
							size: 150,
							mouseWheelLock: true,
							styleClass: 'scroll-visible'
						});

					}, 500 + parseInt(Math.random() * 500));

				});



				//back to message list
				$('.btn-back-message-list').on('click', function(e) {
                                    Inbox.show_list();

				});



				//hide message list and display new message form

				$('.btn-new-mail').on('click', function(e){
					e.preventDefault();
					Inbox.show_form();
				});





				var Inbox = {
					//displays a toolbar according to the number of selected messages
					display_bar : function (count) {
						if(count == 0) {
							$('#id-toggle-all').removeAttr('checked');
							$('#id-message-list-navbar .message-toolbar').addClass('hide');
							$('#id-message-list-navbar .message-infobar').removeClass('hide');
						}
						else {
							$('#id-message-list-navbar .message-infobar').addClass('hide');
							$('#id-message-list-navbar .message-toolbar').removeClass('hide');
						}
					}
					,
					select_all : function() {
						var count = 0;
						$('.message-item input[type=checkbox]').each(function(){
							this.checked = true;
							$(this).closest('.message-item').addClass('selected');
							count++;
						});

						$('#id-toggle-all').get(0).checked = true;

						Inbox.display_bar(count);
					}
					,
					select_none : function() {
						$('.message-item input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');
						$('#id-toggle-all').get(0).checked = false;

						Inbox.display_bar(0);
					}
					,
					select_read : function() {
						$('.message-unread input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');

						var count = 0;
						$('.message-item:not(.message-unread) input[type=checkbox]').each(function(){
							this.checked = true;
							$(this).closest('.message-item').addClass('selected');
							count++;
						});
						Inbox.display_bar(count);
					}
					,
					select_unread : function() {
						$('.message-item:not(.message-unread) input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');

						var count = 0;
						$('.message-unread input[type=checkbox]').each(function(){
							this.checked = true;
							$(this).closest('.message-item').addClass('selected');
							count++;
						});

						Inbox.display_bar(count);
					}
				}

				//show message list (back from writing mail or reading a message)
				Inbox.show_list = function() {
					$('.message-navbar').addClass('hide');
					$('#id-message-list-navbar').removeClass('hide');

					$('.message-footer').addClass('hide');
					$('.message-footer:not(.message-footer-style2)').removeClass('hide');

					$('.message-list').removeClass('hide').next().addClass('hide');
					//hide the message item / new message window and go back to list
				}

				//show write mail form
				Inbox.show_form = function() {
					if($('.message-form').is(':visible')) return;
					if(!form_initialized) {
						initialize_form();
					}


					var message = $('.message-list');
					$('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');

					setTimeout(function() {
						message.next().addClass('hide');

						$('.message-container').find('.message-loading-overlay').remove();

						$('.message-list').addClass('hide');
						$('.message-footer').addClass('hide');
						$('.message-form').removeClass('hide').insertAfter('.message-list');

						$('.message-navbar').addClass('hide');
						$('#id-message-new-navbar').removeClass('hide');


						//reset form??
						$('.message-form .wysiwyg-editor').empty();

						$('.message-form .ace-file-input').closest('.file-input-container:not(:first-child)').remove();
						$('.message-form input[type=file]').ace_file_input('reset_input');

						$('.message-form').get(0).reset();

					}, 300 + parseInt(Math.random() * 300));
				}




				var form_initialized = false;
				function initialize_form() {
					if(form_initialized) return;
					form_initialized = true;

					//intialize wysiwyg editor
					$('.message-form .wysiwyg-editor').ace_wysiwyg({
						toolbar:
						[
							'bold',
							'italic',
							'strikethrough',
							'underline',
							null,
							'justifyleft',
							'justifycenter',
							'justifyright',
							null,
							'createLink',
							'unlink',
							null,
							'undo',
							'redo'
						]
					}).prev().addClass('wysiwyg-style1');



					//file input
					$('.message-form input[type=file]').ace_file_input()
					.closest('.ace-file-input')
					.addClass('width-90 inline')
					.wrap('<div class="form-group file-input-container"><div class="col-sm-7"></div></div>');

					//Add Attachment
					//the button to add a new file input
					$('#id-add-attachment')
					.on('click', function(){
						var file = $('<input type="file" name="attachment[]" />').appendTo('#form-attachments');
						file.ace_file_input();

						file.closest('.ace-file-input')
						.addClass('width-90 inline')
						.wrap('<div class="form-group file-input-container"><div class="col-sm-7"></div></div>')
						.parent().append('<div class="action-buttons pull-right col-xs-1">\
							<a href="#" data-action="delete" class="middle">\
								<i class="ace-icon fa fa-trash-o red bigger-130 middle"></i>\
							</a>\
						</div>')
						.find('a[data-action=delete]').on('click', function(e){
							//the button that removes the newly inserted file input
							e.preventDefault();
							$(this).closest('.file-input-container').hide(300, function(){ $(this).remove() });
						});
					});
				}//initialize_form

				//turn the recipient field into a tag input field!
				/**
				var tag_input = $('#form-field-recipient');
				try {
					tag_input.tag({placeholder:tag_input.attr('placeholder')});
				} catch(e) {}


				//and add form reset functionality
				$('#id-message-form').on('reset', function(){
					$('.message-form .message-body').empty();

					$('.message-form .ace-file-input:not(:first-child)').remove();
					$('.message-form input[type=file]').ace_file_input('reset_input_ui');

					var val = tag_input.data('value');
					tag_input.parent().find('.tag').remove();
					$(val.split(',')).each(function(k,v){
						tag_input.before('<span class="tag">'+v+'<button class="close" type="button">&times;</button></span>');
					});
				});
				*/

			});
		</script>
