/**
 *
 * @author Webcraftic <wordpress.webraftic@gmail.com>
 * @copyright (c) 02.09.2020, Webcraftic
 * @version 1.0
 */

(function($) {
	'use strict';

<<<<<<< HEAD
	if( !$.wfactory_450 ) {
		$.wfactory_450 = {};
	}

	$.wfactory_450.filters = $.wfactory_450.filters || {
=======
	if( !$.wfactory_469 ) {
		$.wfactory_469 = {};
	}

	$.wfactory_469.filters = $.wfactory_469.filters || {
>>>>>>> update

		/**
		 * A set of registered filters.
		 */
		_items: {},

		/**
		 * A set of priorities of registered filters.
		 */
		_priorities: {},

		/**
		 * Applies filters to a given input value.
		 */
		run: function(filterName, args) {
			var input = args && args.length > 0 ? args[0] : null;
			if( !this._items[filterName] ) {
				return input;
			}

			for( var i in this._priorities[filterName] ) {
				if( !this._priorities[filterName].hasOwnProperty(i) ) {
					continue;
				}

				var priority = this._priorities[filterName][i];

				for( var k = 0; k < this._items[filterName][priority].length; k++ ) {
					var f = this._items[filterName][priority][k];
					input = f.apply(f, args);
				}
			}

			return input;
		},

		/**
		 * Registers a new filter.
		 */
		add: function(filterName, callback, priority) {

			if( !priority ) {
				priority = 10;
			}

			if( !this._items[filterName] ) {
				this._items[filterName] = {};
			}
			if( !this._items[filterName][priority] ) {
				this._items[filterName][priority] = [];
			}
			this._items[filterName][priority].push(callback);

			if( !this._priorities[filterName] ) {
				this._priorities[filterName] = [];
			}
			if( $.inArray(priority, this._priorities[filterName]) === -1 ) {
				this._priorities[filterName].push(priority);
			}

			this._priorities[filterName].sort(function(a, b) {
				return a - b;
			});
		}
	};

<<<<<<< HEAD
	$.wfactory_450.hooks = $.wfactory_450.hooks || {
=======
	$.wfactory_469.hooks = $.wfactory_469.hooks || {
>>>>>>> update

		/**
		 * Applies filters to a given input value.
		 */
		run: function(filterName, args) {
<<<<<<< HEAD
			$.wfactory_450.filters.run(filterName, args);
=======
			$.wfactory_469.filters.run(filterName, args);
>>>>>>> update
		},

		/**
		 * Registers a new filter.
		 */
		add: function(filterName, callback, priority) {
<<<<<<< HEAD
			$.wfactory_450.filters.add(filterName, callback, priority);
=======
			$.wfactory_469.filters.add(filterName, callback, priority);
>>>>>>> update
		}
	};

})(jQuery);
