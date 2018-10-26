
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// Register $ global var for jQuery
import $ from 'jquery';
window.$ = window.jQuery = $;


//window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});*/


var userApp = {
	init: function () {
		userApp.userClient();
		userApp.validateAndPost();
	},
	userClient: function () {
		$(document).on('click', ".usn-anch", function(e) {
			e.preventDefault();
			e.stopImmediatePropagation();
			var uname = $(this).closest('tr').find('td:first-child').text();
			var user_id = $(this).attr('id');

			// set hidden variables..
			$('span#uname').html(uname);
			$('input[type="hidden"]#user_id').val(user_id);
			$('#save_unote_btn').attr('data-user_id', user_id);
			$('#note').empty();

			// show modal
			$('#exampleModal').modal('show');
		});
	},
	validateAndPost: function () {
		$(document).on('click', '#save_unote_btn', function() {
			var notes = $('#note').val();
			if (notes.length > 1) {
				var user_id = $(this).attr('data-user_id');
			
    			$.ajax({
			        type: "POST",
			        url: "/app/store/"+user_id+"/note",
			        data: $("#userNoteForm").serialize(), 
			        success: function(msg) {
			            if (msg.response == "success") {
			            	alert("User note was added successfull");
			            } 
			        },
			        error: function (e) {
			        	console.error(e);
			        }
			    });
			    $('#note').empty();
			    $('#exampleModal').modal('hide');
			} else {
				// invalid display errors..
			}
		});
	}
};



$(document).ready(function() {
	userApp.init();
});

