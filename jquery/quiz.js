function game_over() {
	$(".questions").hide();
	$("#game_over").css('display','block');
}

function reset() {
	$("#box").animate({width: "100%"}).delay(3000);
	location.reload();
}

$(document).ready(function() {
	var current_question_bool = false;
	var current_car = "";
	var car_count = 0;

	$(".car_buttons button").hover(function() {
		$(this).addClass("hovered_button");
            if (!current_question_bool && $(this).attr('data-answered') == 'false') {
                $(".question_box").html("Click on a car to show the question!");
                $('#wrong_answer').html("");
                $('#right_answer').html("");
            }
        },
        function() {
            $(this).removeClass("hovered_button");
            if (!current_question_bool) {
            	$(".question_box").html("");
            }
        })

	$(".car_buttons #pathfinder").mousedown(function() {
		if (current_question_bool == 'true') {
			window.alert("Please answer the current question, ya big dummy!");
		} else {
			$('#wrong_answer').html("");
            $('#right_answer').html("");
			$(".question_box").html("Is this car made by Honda?");
			current_car = "pathfinder";
			current_question_bool = true;
		}
	});

	$(".car_buttons #corolla").mousedown(function() {
		if (current_question_bool == 'true') {
			window.alert("Please answer the current question, ya big dummy!");
		} else {
			$('#wrong_answer').html("");
            $('#right_answer').html("");
			$(".question_box").html("Is this car made by Toyota?");
			current_car = "corolla";
			current_question_bool = true;
		}
	});

	$(".car_buttons #pilot").mousedown(function() {
		if (current_question_bool == 'true') {
			window.alert("Please answer the current question, ya big dummy!");
		} else {
			$('#wrong_answer').html("");
            $('#right_answer').html("");
			$(".question_box").html("Is this car made by Ford?");
			current_car = "pilot";
			current_question_bool = true;
		}
	});

	$(".car_buttons #sequoia").mousedown(function() {
		if (current_question_bool == 'true') {
			window.alert("Please answer the current question, ya big dummy!");
		} else {
			$('#wrong_answer').html("");
            $('#right_answer').html("");
            $(".question_box").html("Is this car made by Toyota?");
			current_car = "sequoia";
			current_question_bool = true;
		}
	});

	$("#check_answer").click(function() {
		var radio_true = $("input[name='true']:checked").val();
		var radio_false = $("input[name='false']:checked").val();
		if (!radio_true && !radio_false) {
			window.alert("Please select an answer first, ya big dummy!");
		} else if (!current_question_bool) {
			window.alert("Please select a question first, ya big dummy!");
		} else {
			$("input").prop("checked", false);

			switch (current_car) {
				case "pathfinder":
					if (radio_false) {
						$('#right_answer').html('Correct');
						$('aside #pathfinder_answer').css("display", "list-item");
                    	$('aside #pathfinder_answer').html("Pathfinder &#10004;");
                    	$('.car_buttons #' + current_car).remove();
					} else {
						$('#wrong_answer').html('Incorrect');
						$('aside #pathfinder_answer').css("display", "list-item");
                    	$('aside #pathfinder_answer').html("Pathfinder &#10008;");
                    	$('.car_buttons #' + current_car).remove();
					}
					car_count = car_count + 1;
					break;
				case "corolla":
					if (radio_true) {
						$('#right_answer').html('Correct');
						$('aside #corolla_answer').css("display", "list-item");
                    	$('aside #corolla_answer').html("Corolla &#10004;");
                    	$('.car_buttons #' + current_car).remove();
					} else {
						$('#wrong_answer').html('Incorrect');
						$('aside #corolla_answer').css("display", "list-item");
                    	$('aside #corolla_answer').html("Corolla &#10008;");
                    	$('.car_buttons #' + current_car).remove();
					}
					car_count = car_count + 1;
					break;
				case "pilot":
					if (radio_false) {
						$('#right_answer').html('Correct');
						$('aside #pilot_answer').css("display", "list-item");
                    	$('aside #pilot_answer').html("Pilot &#10004;");
                    	$('.car_buttons #' + current_car).remove();
					} else {
						$('#wrong_answer').html('Incorrect');
						$('aside #pilot_answer').css("display", "list-item");
                    	$('aside #pilot_answer').html("Pilot &#10008;");
                    	$('.car_buttons #' + current_car).remove();
					}
					car_count = car_count + 1;
					break;
				case "sequoia":
					if (radio_true) {
						$('#right_answer').html('Correct');
						$('aside #sequoia_answer').css("display", "list-item");
                    	$('aside #sequoia_answer').html("Sequoia &#10004;");
                    	$('.car_buttons #' + current_car).remove();
					} else {
						$('#wrong_answer').html('Incorrect');
						$('aside #sequoia_answer').css("display", "list-item");
                    	$('aside #sequoia_answer').html("Sequoia &#10008;");
                    	$('.car_buttons #' + current_car).remove();
					}
					car_count = car_count + 1;
					break;
			}
			if (car_count == 4) {
				game_over();
			}
		}
	});

	$('#game_over').dblclick(function() {
		 $('#game_over').html('<img src="../images/dancing.gif" width="100%" height="100%"/>').load("inc/content.php");
    });

    $('aside').dblclick(function() {
    	location.reload();
    })
});