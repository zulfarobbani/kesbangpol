/**
 * main.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */
(function() {

	var bodyEl = document.body,
		content = document.querySelector( '.content-wrap' ),
		openbtn = document.getElementById( 'open-button' ),
		openbtn2 = document.getElementById( 'open-button2' ),
		closebtn = document.getElementById( 'close-button' ),
		closebtn2 = document.getElementById( 'close-button2' ),
		isOpen = false,
		isOpen2 = false;

	function init() {
		initEvents();
	}

	function initEvents() {
		openbtn.addEventListener( 'click', toggleMenu );
		openbtn2.addEventListener( 'click', toggleMenu2 );
		if( closebtn ) {
			closebtn.addEventListener( 'click', toggleMenu );
		}
		if( closebtn2 ) {
			closebtn.addEventListener( 'click', toggleMenu );
		}

		// close the menu element if the target it´s not the menu element or one of its descendants..
		content.addEventListener( 'click', function(ev) {
			var target = ev.target;
			if( isOpen && target !== openbtn ) {
				toggleMenu();
			}
		} );

		content.addEventListener( 'click', function(ev) {
			var target = ev.target;
			if( isOpen2 && target !== openbtn2 ) {
				toggleMenu();
			}
		} );
	}

	function init2(){
		initEvents2();
	}

	function initEvents2(){
		
	}

	function toggleMenu() {
		if( isOpen ) {
			classie.remove( bodyEl, 'show-menu' );
		}
		else {
			classie.add( bodyEl, 'show-menu' );
		}
		isOpen = !isOpen;
	}

	function toggleMenu2() {
		if( isOpen2 ) {
			classie.remove( bodyEl, 'show-menu2' );
		}
		else {
			classie.add( bodyEl, 'show-menu2' );
		}
		isOpen2 = !isOpen2;
	}

	init();

})();