/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/advanced-custom-fields-pro/assets/src/js/_acf-hooks.js":
/*!********************************************************************!*\
  !*** ./src/advanced-custom-fields-pro/assets/src/js/_acf-hooks.js ***!
  \********************************************************************/
/***/ (() => {

(function (window, undefined) {
  'use strict';
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   * Handles managing all events for whatever you plug it into. Priorities for hooks are based on lowest to highest in
   * that, lowest priority hooks are fired first.
   */
<<<<<<< HEAD

=======
>>>>>>> update
  var EventManager = function () {
    /**
     * Maintain a reference to the object scope so our public methods never get confusing.
     */
    var MethodsAvailable = {
      removeFilter: removeFilter,
      applyFilters: applyFilters,
      addFilter: addFilter,
      removeAction: removeAction,
      doAction: doAction,
      addAction: addAction,
      storage: getStorage
    };
<<<<<<< HEAD
=======

>>>>>>> update
    /**
     * Contains the hooks that get registered with this EventManager. The array for storage utilizes a "flat"
     * object literal such that looking up the hook utilizes the native object literal hash.
     */
<<<<<<< HEAD

=======
>>>>>>> update
    var STORAGE = {
      actions: {},
      filters: {}
    };
<<<<<<< HEAD

    function getStorage() {
      return STORAGE;
    }
=======
    function getStorage() {
      return STORAGE;
    }

>>>>>>> update
    /**
     * Adds an action to the event manager.
     *
     * @param action Must contain namespace.identifier
     * @param callback Must be a valid callback function before this action is added
     * @param [priority=10] Used to control when the function is executed in relation to other callbacks bound to the same hook
     * @param [context] Supply a value to be used for this
     */
<<<<<<< HEAD


    function addAction(action, callback, priority, context) {
      if (typeof action === 'string' && typeof callback === 'function') {
        priority = parseInt(priority || 10, 10);

        _addHook('actions', action, callback, priority, context);
      }

      return MethodsAvailable;
    }
=======
    function addAction(action, callback, priority, context) {
      if (typeof action === 'string' && typeof callback === 'function') {
        priority = parseInt(priority || 10, 10);
        _addHook('actions', action, callback, priority, context);
      }
      return MethodsAvailable;
    }

>>>>>>> update
    /**
     * Performs an action if it exists. You can pass as many arguments as you want to this function; the only rule is
     * that the first argument must always be the action.
     */
<<<<<<< HEAD


    function
      /* action, arg1, arg2, ... */
    doAction() {
      var args = Array.prototype.slice.call(arguments);
      var action = args.shift();

      if (typeof action === 'string') {
        _runHook('actions', action, args);
      }

      return MethodsAvailable;
    }
=======
    function doAction( /* action, arg1, arg2, ... */
    ) {
      var args = Array.prototype.slice.call(arguments);
      var action = args.shift();
      if (typeof action === 'string') {
        _runHook('actions', action, args);
      }
      return MethodsAvailable;
    }

>>>>>>> update
    /**
     * Removes the specified action if it contains a namespace.identifier & exists.
     *
     * @param action The action to remove
     * @param [callback] Callback function to remove
     */
<<<<<<< HEAD


=======
>>>>>>> update
    function removeAction(action, callback) {
      if (typeof action === 'string') {
        _removeHook('actions', action, callback);
      }
<<<<<<< HEAD

      return MethodsAvailable;
    }
=======
      return MethodsAvailable;
    }

>>>>>>> update
    /**
     * Adds a filter to the event manager.
     *
     * @param filter Must contain namespace.identifier
     * @param callback Must be a valid callback function before this action is added
     * @param [priority=10] Used to control when the function is executed in relation to other callbacks bound to the same hook
     * @param [context] Supply a value to be used for this
     */
<<<<<<< HEAD


    function addFilter(filter, callback, priority, context) {
      if (typeof filter === 'string' && typeof callback === 'function') {
        priority = parseInt(priority || 10, 10);

        _addHook('filters', filter, callback, priority, context);
      }

      return MethodsAvailable;
    }
=======
    function addFilter(filter, callback, priority, context) {
      if (typeof filter === 'string' && typeof callback === 'function') {
        priority = parseInt(priority || 10, 10);
        _addHook('filters', filter, callback, priority, context);
      }
      return MethodsAvailable;
    }

>>>>>>> update
    /**
     * Performs a filter if it exists. You should only ever pass 1 argument to be filtered. The only rule is that
     * the first argument must always be the filter.
     */
<<<<<<< HEAD


    function
      /* filter, filtered arg, arg2, ... */
    applyFilters() {
      var args = Array.prototype.slice.call(arguments);
      var filter = args.shift();

      if (typeof filter === 'string') {
        return _runHook('filters', filter, args);
      }

      return MethodsAvailable;
    }
=======
    function applyFilters( /* filter, filtered arg, arg2, ... */
    ) {
      var args = Array.prototype.slice.call(arguments);
      var filter = args.shift();
      if (typeof filter === 'string') {
        return _runHook('filters', filter, args);
      }
      return MethodsAvailable;
    }

>>>>>>> update
    /**
     * Removes the specified filter if it contains a namespace.identifier & exists.
     *
     * @param filter The action to remove
     * @param [callback] Callback function to remove
     */
<<<<<<< HEAD


=======
>>>>>>> update
    function removeFilter(filter, callback) {
      if (typeof filter === 'string') {
        _removeHook('filters', filter, callback);
      }
<<<<<<< HEAD

      return MethodsAvailable;
    }
=======
      return MethodsAvailable;
    }

>>>>>>> update
    /**
     * Removes the specified hook by resetting the value of it.
     *
     * @param type Type of hook, either 'actions' or 'filters'
     * @param hook The hook (namespace.identifier) to remove
     * @private
     */
<<<<<<< HEAD


=======
>>>>>>> update
    function _removeHook(type, hook, callback, context) {
      if (!STORAGE[type][hook]) {
        return;
      }
<<<<<<< HEAD

=======
>>>>>>> update
      if (!callback) {
        STORAGE[type][hook] = [];
      } else {
        var handlers = STORAGE[type][hook];
        var i;
<<<<<<< HEAD

=======
>>>>>>> update
        if (!context) {
          for (i = handlers.length; i--;) {
            if (handlers[i].callback === callback) {
              handlers.splice(i, 1);
            }
          }
        } else {
          for (i = handlers.length; i--;) {
            var handler = handlers[i];
<<<<<<< HEAD

=======
>>>>>>> update
            if (handler.callback === callback && handler.context === context) {
              handlers.splice(i, 1);
            }
          }
        }
      }
    }
<<<<<<< HEAD
=======

>>>>>>> update
    /**
     * Adds the hook to the appropriate storage container
     *
     * @param type 'actions' or 'filters'
     * @param hook The hook (namespace.identifier) to add to our event manager
     * @param callback The function that will be called when the hook is executed.
     * @param priority The priority of this hook. Must be an integer.
     * @param [context] A value to be used for this
     * @private
     */
<<<<<<< HEAD


=======
>>>>>>> update
    function _addHook(type, hook, callback, priority, context) {
      var hookObject = {
        callback: callback,
        priority: priority,
        context: context
<<<<<<< HEAD
      }; // Utilize 'prop itself' : http://jsperf.com/hasownproperty-vs-in-vs-undefined/19

      var hooks = STORAGE[type][hook];

=======
      };

      // Utilize 'prop itself' : http://jsperf.com/hasownproperty-vs-in-vs-undefined/19
      var hooks = STORAGE[type][hook];
>>>>>>> update
      if (hooks) {
        hooks.push(hookObject);
        hooks = _hookInsertSort(hooks);
      } else {
        hooks = [hookObject];
      }
<<<<<<< HEAD

      STORAGE[type][hook] = hooks;
    }
=======
      STORAGE[type][hook] = hooks;
    }

>>>>>>> update
    /**
     * Use an insert sort for keeping our hooks organized based on priority. This function is ridiculously faster
     * than bubble sort, etc: http://jsperf.com/javascript-sort
     *
     * @param hooks The custom array containing all of the appropriate hooks to perform an insert sort on.
     * @private
     */
<<<<<<< HEAD


    function _hookInsertSort(hooks) {
      var tmpHook, j, prevHook;

      for (var i = 1, len = hooks.length; i < len; i++) {
        tmpHook = hooks[i];
        j = i;

=======
    function _hookInsertSort(hooks) {
      var tmpHook, j, prevHook;
      for (var i = 1, len = hooks.length; i < len; i++) {
        tmpHook = hooks[i];
        j = i;
>>>>>>> update
        while ((prevHook = hooks[j - 1]) && prevHook.priority > tmpHook.priority) {
          hooks[j] = hooks[j - 1];
          --j;
        }
<<<<<<< HEAD

        hooks[j] = tmpHook;
      }

      return hooks;
    }
=======
        hooks[j] = tmpHook;
      }
      return hooks;
    }

>>>>>>> update
    /**
     * Runs the specified hook. If it is an action, the value is not modified but if it is a filter, it is.
     *
     * @param type 'actions' or 'filters'
     * @param hook The hook ( namespace.identifier ) to be ran.
     * @param args Arguments to pass to the action/filter. If it's a filter, args is actually a single parameter.
     * @private
     */
<<<<<<< HEAD


    function _runHook(type, hook, args) {
      var handlers = STORAGE[type][hook];

      if (!handlers) {
        return type === 'filters' ? args[0] : false;
      }

      var i = 0,
          len = handlers.length;

=======
    function _runHook(type, hook, args) {
      var handlers = STORAGE[type][hook];
      if (!handlers) {
        return type === 'filters' ? args[0] : false;
      }
      var i = 0,
        len = handlers.length;
>>>>>>> update
      if (type === 'filters') {
        for (; i < len; i++) {
          args[0] = handlers[i].callback.apply(handlers[i].context, args);
        }
      } else {
        for (; i < len; i++) {
          handlers[i].callback.apply(handlers[i].context, args);
        }
      }
<<<<<<< HEAD

      return type === 'filters' ? args[0] : true;
    } // return all of the publicly available methods


    return MethodsAvailable;
  }; // instantiate


=======
      return type === 'filters' ? args[0] : true;
    }

    // return all of the publicly available methods
    return MethodsAvailable;
  };

  // instantiate
>>>>>>> update
  acf.hooks = new EventManager();
})(window);

/***/ }),

/***/ "./src/advanced-custom-fields-pro/assets/src/js/_acf-modal.js":
/*!********************************************************************!*\
  !*** ./src/advanced-custom-fields-pro/assets/src/js/_acf-modal.js ***!
  \********************************************************************/
/***/ (() => {

(function ($, undefined) {
  acf.models.Modal = acf.Model.extend({
    data: {
      title: '',
      content: '',
      toolbar: ''
    },
    events: {
      'click .acf-modal-close': 'onClickClose'
    },
    setup: function (props) {
      $.extend(this.data, props);
      this.$el = $();
      this.render();
    },
    initialize: function () {
      this.open();
    },
    render: function () {
      // Extract vars.
      var title = this.get('title');
      var content = this.get('content');
<<<<<<< HEAD
      var toolbar = this.get('toolbar'); // Create element.

      var $el = $(['<div>', '<div class="acf-modal">', '<div class="acf-modal-title">', '<h2>' + title + '</h2>', '<button class="acf-modal-close" type="button"><span class="dashicons dashicons-no"></span></button>', '</div>', '<div class="acf-modal-content">' + content + '</div>', '<div class="acf-modal-toolbar">' + toolbar + '</div>', '</div>', '<div class="acf-modal-backdrop acf-modal-close"></div>', '</div>'].join('')); // Update DOM.

      if (this.$el) {
        this.$el.replaceWith($el);
      }

      this.$el = $el; // Trigger action.

=======
      var toolbar = this.get('toolbar');

      // Create element.
      var $el = $(['<div>', '<div class="acf-modal">', '<div class="acf-modal-title">', '<h2>' + title + '</h2>', '<button class="acf-modal-close" type="button"><span class="dashicons dashicons-no"></span></button>', '</div>', '<div class="acf-modal-content">' + content + '</div>', '<div class="acf-modal-toolbar">' + toolbar + '</div>', '</div>', '<div class="acf-modal-backdrop acf-modal-close"></div>', '</div>'].join(''));

      // Update DOM.
      if (this.$el) {
        this.$el.replaceWith($el);
      }
      this.$el = $el;

      // Trigger action.
>>>>>>> update
      acf.doAction('append', $el);
    },
    update: function (props) {
      this.data = acf.parseArgs(props, this.data);
      this.render();
    },
    title: function (title) {
      this.$('.acf-modal-title h2').html(title);
    },
    content: function (content) {
      this.$('.acf-modal-content').html(content);
    },
    toolbar: function (toolbar) {
      this.$('.acf-modal-toolbar').html(toolbar);
    },
    open: function () {
      $('body').append(this.$el);
    },
    close: function () {
      this.remove();
    },
    onClickClose: function (e, $el) {
      e.preventDefault();
      this.close();
<<<<<<< HEAD
    }
  });
=======
    },
    /**
     * Places focus within the popup.
     */
    focus: function () {
      this.$el.find('.acf-icon').first().trigger('focus');
    },
    /**
     * Locks focus within the modal.
     *
     * @param {boolean} locked True to lock focus, false to unlock.
     */
    lockFocusToModal: function (locked) {
      let inertElement = $('#wpwrap');
      if (!inertElement.length) {
        return;
      }
      inertElement[0].inert = locked;
      inertElement.attr('aria-hidden', locked);
    },
    /**
     * Returns focus to the element that opened the popup
     * if it still exists in the DOM.
     */
    returnFocusToOrigin: function () {
      if (this.data.openedBy instanceof $ && this.data.openedBy.closest('body').length > 0) {
        this.data.openedBy.trigger('focus');
      }
    }
  });

>>>>>>> update
  /**
   * Returns a new modal.
   *
   * @date	21/4/20
   * @since	5.9.0
   *
   * @param	object props The modal props.
   * @return	object
   */
<<<<<<< HEAD

=======
>>>>>>> update
  acf.newModal = function (props) {
    return new acf.models.Modal(props);
  };
})(jQuery);

/***/ }),

/***/ "./src/advanced-custom-fields-pro/assets/src/js/_acf-model.js":
/*!********************************************************************!*\
  !*** ./src/advanced-custom-fields-pro/assets/src/js/_acf-model.js ***!
  \********************************************************************/
/***/ (() => {

(function ($, undefined) {
  // Cached regex to split keys for `addEvent`.
  var delegateEventSplitter = /^(\S+)\s*(.*)$/;
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  extend
   *
   *  Helper function to correctly set up the prototype chain for subclasses
   *  Heavily inspired by backbone.js
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	object protoProps New properties for this object.
   *  @return	function.
   */

  var extend = function (protoProps) {
    // vars
    var Parent = this;
<<<<<<< HEAD
    var Child; // The constructor function for the new subclass is either defined by you
    // (the "constructor" property in your `extend` definition), or defaulted
    // by us to simply call the parent constructor.

=======
    var Child;

    // The constructor function for the new subclass is either defined by you
    // (the "constructor" property in your `extend` definition), or defaulted
    // by us to simply call the parent constructor.
>>>>>>> update
    if (protoProps && protoProps.hasOwnProperty('constructor')) {
      Child = protoProps.constructor;
    } else {
      Child = function () {
        return Parent.apply(this, arguments);
      };
<<<<<<< HEAD
    } // Add static properties to the constructor function, if supplied.


    $.extend(Child, Parent); // Set the prototype chain to inherit from `parent`, without calling
    // `parent`'s constructor function and add the prototype properties.

    Child.prototype = Object.create(Parent.prototype);
    $.extend(Child.prototype, protoProps);
    Child.prototype.constructor = Child; // Set a convenience property in case the parent's prototype is needed later.
    //Child.prototype.__parent__ = Parent.prototype;
    // return

    return Child;
  };
=======
    }

    // Add static properties to the constructor function, if supplied.
    $.extend(Child, Parent);

    // Set the prototype chain to inherit from `parent`, without calling
    // `parent`'s constructor function and add the prototype properties.
    Child.prototype = Object.create(Parent.prototype);
    $.extend(Child.prototype, protoProps);
    Child.prototype.constructor = Child;

    // Set a convenience property in case the parent's prototype is needed later.
    //Child.prototype.__parent__ = Parent.prototype;

    // return
    return Child;
  };

>>>>>>> update
  /**
   *  Model
   *
   *  Base class for all inheritence
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	object props
   *  @return	function.
   */

<<<<<<< HEAD

  var Model = acf.Model = function () {
    // generate uique client id
    this.cid = acf.uniqueId('acf'); // set vars to avoid modifying prototype

    this.data = $.extend(true, {}, this.data); // pass props to setup function

    this.setup.apply(this, arguments); // store on element (allow this.setup to create this.$el)

    if (this.$el && !this.$el.data('acf')) {
      this.$el.data('acf', this);
    } // initialize


=======
  var Model = acf.Model = function () {
    // generate uique client id
    this.cid = acf.uniqueId('acf');

    // set vars to avoid modifying prototype
    this.data = $.extend(true, {}, this.data);

    // pass props to setup function
    this.setup.apply(this, arguments);

    // store on element (allow this.setup to create this.$el)
    if (this.$el && !this.$el.data('acf')) {
      this.$el.data('acf', this);
    }

    // initialize
>>>>>>> update
    var initialize = function () {
      this.initialize();
      this.addEvents();
      this.addActions();
      this.addFilters();
<<<<<<< HEAD
    }; // initialize on action


    if (this.wait && !acf.didAction(this.wait)) {
      this.addAction(this.wait, initialize); // initialize now
    } else {
      initialize.apply(this);
    }
  }; // Attach all inheritable methods to the Model prototype.


=======
    };

    // initialize on action
    if (this.wait && !acf.didAction(this.wait)) {
      this.addAction(this.wait, initialize);

      // initialize now
    } else {
      initialize.apply(this);
    }
  };

  // Attach all inheritable methods to the Model prototype.
>>>>>>> update
  $.extend(Model.prototype, {
    // Unique model id
    id: '',
    // Unique client id
    cid: '',
    // jQuery element
    $el: null,
    // Data specific to this instance
    data: {},
    // toggle used when changing data
    busy: false,
    changed: false,
    // Setup events hooks
    events: {},
    actions: {},
    filters: {},
    // class used to avoid nested event triggers
    eventScope: '',
    // action to wait until initialize
    wait: false,
    // action priority default
    priority: 10,
<<<<<<< HEAD

=======
>>>>>>> update
    /**
     *  get
     *
     *  Gets a specific data value
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	string name
     *  @return	mixed
     */
<<<<<<< HEAD
    get: function (name) {
      return this.data[name];
    },

=======

    get: function (name) {
      return this.data[name];
    },
>>>>>>> update
    /**
     *  has
     *
     *  Returns `true` if the data exists and is not null
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	string name
     *  @return	boolean
     */
<<<<<<< HEAD
    has: function (name) {
      return this.get(name) != null;
    },

=======

    has: function (name) {
      return this.get(name) != null;
    },
>>>>>>> update
    /**
     *  set
     *
     *  Sets a specific data value
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	string name
     *  @param	mixed value
     *  @return	this
     */
<<<<<<< HEAD
    set: function (name, value, silent) {
      // bail if unchanged
      var prevValue = this.get(name);

      if (prevValue == value) {
        return this;
      } // set data


      this.data[name] = value; // trigger events

=======

    set: function (name, value, silent) {
      // bail if unchanged
      var prevValue = this.get(name);
      if (prevValue == value) {
        return this;
      }

      // set data
      this.data[name] = value;

      // trigger events
>>>>>>> update
      if (!silent) {
        this.changed = true;
        this.trigger('changed:' + name, [value, prevValue]);
        this.trigger('changed', [name, value, prevValue]);
<<<<<<< HEAD
      } // return


      return this;
    },

=======
      }

      // return
      return this;
    },
>>>>>>> update
    /**
     *  inherit
     *
     *  Inherits the data from a jQuery element
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	jQuery $el
     *  @return	this
     */
<<<<<<< HEAD
=======

>>>>>>> update
    inherit: function (data) {
      // allow jQuery
      if (data instanceof jQuery) {
        data = data.data();
<<<<<<< HEAD
      } // extend


      $.extend(this.data, data); // return

      return this;
    },

=======
      }

      // extend
      $.extend(this.data, data);

      // return
      return this;
    },
>>>>>>> update
    /**
     *  prop
     *
     *  mimics the jQuery prop function
     *
     *  @date	4/6/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
<<<<<<< HEAD
    prop: function () {
      return this.$el.prop.apply(this.$el, arguments);
    },

=======

    prop: function () {
      return this.$el.prop.apply(this.$el, arguments);
    },
>>>>>>> update
    /**
     *  setup
     *
     *  Run during constructor function
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	n/a
     *  @return	n/a
     */
<<<<<<< HEAD
    setup: function (props) {
      $.extend(this, props);
    },

=======

    setup: function (props) {
      $.extend(this, props);
    },
>>>>>>> update
    /**
     *  initialize
     *
     *  Also run during constructor function
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	n/a
     *  @return	n/a
     */
<<<<<<< HEAD
    initialize: function () {},

=======

    initialize: function () {},
>>>>>>> update
    /**
     *  addElements
     *
     *  Adds multiple jQuery elements to this object
     *
     *  @date	9/5/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
<<<<<<< HEAD
    addElements: function (elements) {
      elements = elements || this.elements || null;
      if (!elements || !Object.keys(elements).length) return false;

=======

    addElements: function (elements) {
      elements = elements || this.elements || null;
      if (!elements || !Object.keys(elements).length) return false;
>>>>>>> update
      for (var i in elements) {
        this.addElement(i, elements[i]);
      }
    },
<<<<<<< HEAD

=======
>>>>>>> update
    /**
     *  addElement
     *
     *  description
     *
     *  @date	9/5/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
<<<<<<< HEAD
    addElement: function (name, selector) {
      this['$' + name] = this.$(selector);
    },

=======

    addElement: function (name, selector) {
      this['$' + name] = this.$(selector);
    },
>>>>>>> update
    /**
     *  addEvents
     *
     *  Adds multiple event handlers
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	object events {event1 : callback, event2 : callback, etc }
     *  @return	n/a
     */
<<<<<<< HEAD
    addEvents: function (events) {
      events = events || this.events || null;
      if (!events) return false;

=======

    addEvents: function (events) {
      events = events || this.events || null;
      if (!events) return false;
>>>>>>> update
      for (var key in events) {
        var match = key.match(delegateEventSplitter);
        this.on(match[1], match[2], events[key]);
      }
    },
<<<<<<< HEAD

=======
>>>>>>> update
    /**
     *  removeEvents
     *
     *  Removes multiple event handlers
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	object events {event1 : callback, event2 : callback, etc }
     *  @return	n/a
     */
<<<<<<< HEAD
    removeEvents: function (events) {
      events = events || this.events || null;
      if (!events) return false;

=======

    removeEvents: function (events) {
      events = events || this.events || null;
      if (!events) return false;
>>>>>>> update
      for (var key in events) {
        var match = key.match(delegateEventSplitter);
        this.off(match[1], match[2], events[key]);
      }
    },
<<<<<<< HEAD

    /**
     *  getEventTarget
     *
     *  Returns a jQUery element to tigger an event on
=======
    /**
     *  getEventTarget
     *
     *  Returns a jQuery element to trigger an event on.
>>>>>>> update
     *
     *  @date	5/6/18
     *  @since	5.6.9
     *
     *  @param	jQuery $el		The default jQuery element. Optional.
     *  @param	string event	The event name. Optional.
     *  @return	jQuery
     */
<<<<<<< HEAD
    getEventTarget: function ($el, event) {
      return $el || this.$el || $(document);
    },

=======

    getEventTarget: function ($el, event) {
      return $el || this.$el || $(document);
    },
>>>>>>> update
    /**
     *  validateEvent
     *
     *  Returns true if the event target's closest $el is the same as this.$el
     *  Requires both this.el and this.$el to be defined
     *
     *  @date	5/6/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
<<<<<<< HEAD
=======

>>>>>>> update
    validateEvent: function (e) {
      if (this.eventScope) {
        return $(e.target).closest(this.eventScope).is(this.$el);
      } else {
        return true;
      }
    },
<<<<<<< HEAD

=======
>>>>>>> update
    /**
     *  proxyEvent
     *
     *  Returns a new event callback function scoped to this model
     *
     *  @date	29/3/18
     *  @since	5.6.9
     *
     *  @param	function callback
     *  @return	function
     */
<<<<<<< HEAD
=======

>>>>>>> update
    proxyEvent: function (callback) {
      return this.proxy(function (e) {
        // validate
        if (!this.validateEvent(e)) {
          return;
<<<<<<< HEAD
        } // construct args


        var args = acf.arrayArgs(arguments);
        var extraArgs = args.slice(1);
        var eventArgs = [e, $(e.currentTarget)].concat(extraArgs); // callback

        callback.apply(this, eventArgs);
      });
    },

=======
        }

        // construct args
        var args = acf.arrayArgs(arguments);
        var extraArgs = args.slice(1);
        var eventArgs = [e, $(e.currentTarget)].concat(extraArgs);

        // callback
        callback.apply(this, eventArgs);
      });
    },
>>>>>>> update
    /**
     *  on
     *
     *  Adds an event handler similar to jQuery
     *  Uses the instance 'cid' to namespace event
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	string name
     *  @param	string callback
     *  @return	n/a
     */
<<<<<<< HEAD
    on: function (a1, a2, a3, a4) {
      // vars
      var $el, event, selector, callback, args; // find args

=======

    on: function (a1, a2, a3, a4) {
      // vars
      var $el, event, selector, callback, args;

      // find args
>>>>>>> update
      if (a1 instanceof jQuery) {
        // 1. args( $el, event, selector, callback )
        if (a4) {
          $el = a1;
          event = a2;
          selector = a3;
<<<<<<< HEAD
          callback = a4; // 2. args( $el, event, callback )
=======
          callback = a4;

          // 2. args( $el, event, callback )
>>>>>>> update
        } else {
          $el = a1;
          event = a2;
          callback = a3;
        }
      } else {
        // 3. args( event, selector, callback )
        if (a3) {
          event = a1;
          selector = a2;
<<<<<<< HEAD
          callback = a3; // 4. args( event, callback )
=======
          callback = a3;

          // 4. args( event, callback )
>>>>>>> update
        } else {
          event = a1;
          callback = a2;
        }
<<<<<<< HEAD
      } // element


      $el = this.getEventTarget($el); // modify callback

      if (typeof callback === 'string') {
        callback = this.proxyEvent(this[callback]);
      } // modify event


      event = event + '.' + this.cid; // args

=======
      }

      // element
      $el = this.getEventTarget($el);

      // modify callback
      if (typeof callback === 'string') {
        callback = this.proxyEvent(this[callback]);
      }

      // modify event
      event = event + '.' + this.cid;

      // args
>>>>>>> update
      if (selector) {
        args = [event, selector, callback];
      } else {
        args = [event, callback];
<<<<<<< HEAD
      } // on()


      $el.on.apply($el, args);
    },

=======
      }

      // on()
      $el.on.apply($el, args);
    },
>>>>>>> update
    /**
     *  off
     *
     *  Removes an event handler similar to jQuery
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	string name
     *  @param	string callback
     *  @return	n/a
     */
<<<<<<< HEAD
    off: function (a1, a2, a3) {
      // vars
      var $el, event, selector, args; // find args

=======

    off: function (a1, a2, a3) {
      // vars
      var $el, event, selector, args;

      // find args
>>>>>>> update
      if (a1 instanceof jQuery) {
        // 1. args( $el, event, selector )
        if (a3) {
          $el = a1;
          event = a2;
<<<<<<< HEAD
          selector = a3; // 2. args( $el, event )
=======
          selector = a3;

          // 2. args( $el, event )
>>>>>>> update
        } else {
          $el = a1;
          event = a2;
        }
      } else {
        // 3. args( event, selector )
        if (a2) {
          event = a1;
<<<<<<< HEAD
          selector = a2; // 4. args( event )
        } else {
          event = a1;
        }
      } // element


      $el = this.getEventTarget($el); // modify event

      event = event + '.' + this.cid; // args

=======
          selector = a2;

          // 4. args( event )
        } else {
          event = a1;
        }
      }

      // element
      $el = this.getEventTarget($el);

      // modify event
      event = event + '.' + this.cid;

      // args
>>>>>>> update
      if (selector) {
        args = [event, selector];
      } else {
        args = [event];
<<<<<<< HEAD
      } // off()


      $el.off.apply($el, args);
    },

=======
      }

      // off()
      $el.off.apply($el, args);
    },
>>>>>>> update
    /**
     *  trigger
     *
     *  Triggers an event similar to jQuery
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	string name
     *  @param	string callback
     *  @return	n/a
     */
<<<<<<< HEAD
    trigger: function (name, args, bubbles) {
      var $el = this.getEventTarget();

=======

    trigger: function (name, args, bubbles) {
      var $el = this.getEventTarget();
>>>>>>> update
      if (bubbles) {
        $el.trigger.apply($el, arguments);
      } else {
        $el.triggerHandler.apply($el, arguments);
      }
<<<<<<< HEAD

      return this;
    },

=======
      return this;
    },
>>>>>>> update
    /**
     *  addActions
     *
     *  Adds multiple action handlers
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	object actions {action1 : callback, action2 : callback, etc }
     *  @return	n/a
     */
<<<<<<< HEAD
    addActions: function (actions) {
      actions = actions || this.actions || null;
      if (!actions) return false;

=======

    addActions: function (actions) {
      actions = actions || this.actions || null;
      if (!actions) return false;
>>>>>>> update
      for (var i in actions) {
        this.addAction(i, actions[i]);
      }
    },
<<<<<<< HEAD

=======
>>>>>>> update
    /**
     *  removeActions
     *
     *  Removes multiple action handlers
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	object actions {action1 : callback, action2 : callback, etc }
     *  @return	n/a
     */
<<<<<<< HEAD
    removeActions: function (actions) {
      actions = actions || this.actions || null;
      if (!actions) return false;

=======

    removeActions: function (actions) {
      actions = actions || this.actions || null;
      if (!actions) return false;
>>>>>>> update
      for (var i in actions) {
        this.removeAction(i, actions[i]);
      }
    },
<<<<<<< HEAD

=======
>>>>>>> update
    /**
     *  addAction
     *
     *  Adds an action using the wp.hooks library
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	string name
     *  @param	string callback
     *  @return	n/a
     */
<<<<<<< HEAD
    addAction: function (name, callback, priority) {
      //console.log('addAction', name, priority);
      // defaults
      priority = priority || this.priority; // modify callback

      if (typeof callback === 'string') {
        callback = this[callback];
      } // add


      acf.addAction(name, callback, priority, this);
    },

=======

    addAction: function (name, callback, priority) {
      //console.log('addAction', name, priority);
      // defaults
      priority = priority || this.priority;

      // modify callback
      if (typeof callback === 'string') {
        callback = this[callback];
      }

      // add
      acf.addAction(name, callback, priority, this);
    },
>>>>>>> update
    /**
     *  removeAction
     *
     *  Remove an action using the wp.hooks library
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	string name
     *  @param	string callback
     *  @return	n/a
     */
<<<<<<< HEAD
    removeAction: function (name, callback) {
      acf.removeAction(name, this[callback]);
    },

=======

    removeAction: function (name, callback) {
      acf.removeAction(name, this[callback]);
    },
>>>>>>> update
    /**
     *  addFilters
     *
     *  Adds multiple filter handlers
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	object filters {filter1 : callback, filter2 : callback, etc }
     *  @return	n/a
     */
<<<<<<< HEAD
    addFilters: function (filters) {
      filters = filters || this.filters || null;
      if (!filters) return false;

=======

    addFilters: function (filters) {
      filters = filters || this.filters || null;
      if (!filters) return false;
>>>>>>> update
      for (var i in filters) {
        this.addFilter(i, filters[i]);
      }
    },
<<<<<<< HEAD

=======
>>>>>>> update
    /**
     *  addFilter
     *
     *  Adds a filter using the wp.hooks library
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	string name
     *  @param	string callback
     *  @return	n/a
     */
<<<<<<< HEAD
    addFilter: function (name, callback, priority) {
      // defaults
      priority = priority || this.priority; // modify callback

      if (typeof callback === 'string') {
        callback = this[callback];
      } // add


      acf.addFilter(name, callback, priority, this);
    },

=======

    addFilter: function (name, callback, priority) {
      // defaults
      priority = priority || this.priority;

      // modify callback
      if (typeof callback === 'string') {
        callback = this[callback];
      }

      // add
      acf.addFilter(name, callback, priority, this);
    },
>>>>>>> update
    /**
     *  removeFilters
     *
     *  Removes multiple filter handlers
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	object filters {filter1 : callback, filter2 : callback, etc }
     *  @return	n/a
     */
<<<<<<< HEAD
    removeFilters: function (filters) {
      filters = filters || this.filters || null;
      if (!filters) return false;

=======

    removeFilters: function (filters) {
      filters = filters || this.filters || null;
      if (!filters) return false;
>>>>>>> update
      for (var i in filters) {
        this.removeFilter(i, filters[i]);
      }
    },
<<<<<<< HEAD

=======
>>>>>>> update
    /**
     *  removeFilter
     *
     *  Remove a filter using the wp.hooks library
     *
     *  @date	14/12/17
     *  @since	5.6.5
     *
     *  @param	string name
     *  @param	string callback
     *  @return	n/a
     */
<<<<<<< HEAD
    removeFilter: function (name, callback) {
      acf.removeFilter(name, this[callback]);
    },

=======

    removeFilter: function (name, callback) {
      acf.removeFilter(name, this[callback]);
    },
>>>>>>> update
    /**
     *  $
     *
     *  description
     *
     *  @date	16/12/17
     *  @since	5.6.5
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
<<<<<<< HEAD
    $: function (selector) {
      return this.$el.find(selector);
    },

=======

    $: function (selector) {
      return this.$el.find(selector);
    },
>>>>>>> update
    /**
     *  remove
     *
     *  Removes the element and listenters
     *
     *  @date	19/12/17
     *  @since	5.6.5
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
<<<<<<< HEAD
=======

>>>>>>> update
    remove: function () {
      this.removeEvents();
      this.removeActions();
      this.removeFilters();
      this.$el.remove();
    },
<<<<<<< HEAD

=======
>>>>>>> update
    /**
     *  setTimeout
     *
     *  description
     *
     *  @date	16/1/18
     *  @since	5.6.5
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
<<<<<<< HEAD
    setTimeout: function (callback, milliseconds) {
      return setTimeout(this.proxy(callback), milliseconds);
    },

=======

    setTimeout: function (callback, milliseconds) {
      return setTimeout(this.proxy(callback), milliseconds);
    },
>>>>>>> update
    /**
     *  time
     *
     *  used for debugging
     *
     *  @date	7/3/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
<<<<<<< HEAD
    time: function () {
      console.time(this.id || this.cid);
    },

=======

    time: function () {
      console.time(this.id || this.cid);
    },
>>>>>>> update
    /**
     *  timeEnd
     *
     *  used for debugging
     *
     *  @date	7/3/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
<<<<<<< HEAD
    timeEnd: function () {
      console.timeEnd(this.id || this.cid);
    },

=======

    timeEnd: function () {
      console.timeEnd(this.id || this.cid);
    },
>>>>>>> update
    /**
     *  show
     *
     *  description
     *
     *  @date	15/3/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
<<<<<<< HEAD
    show: function () {
      acf.show(this.$el);
    },

=======

    show: function () {
      acf.show(this.$el);
    },
>>>>>>> update
    /**
     *  hide
     *
     *  description
     *
     *  @date	15/3/18
     *  @since	5.6.9
     *
     *  @param	type $var Description. Default.
     *  @return	type Description.
     */
<<<<<<< HEAD
    hide: function () {
      acf.hide(this.$el);
    },

=======

    hide: function () {
      acf.hide(this.$el);
    },
>>>>>>> update
    /**
     *  proxy
     *
     *  Returns a new function scoped to this model
     *
     *  @date	29/3/18
     *  @since	5.6.9
     *
     *  @param	function callback
     *  @return	function
     */
<<<<<<< HEAD
    proxy: function (callback) {
      return $.proxy(callback, this);
    }
  }); // Set up inheritance for the model

  Model.extend = extend; // Global model storage

  acf.models = {};
=======

    proxy: function (callback) {
      return $.proxy(callback, this);
    }
  });

  // Set up inheritance for the model
  Model.extend = extend;

  // Global model storage
  acf.models = {};

>>>>>>> update
  /**
   *  acf.getInstance
   *
   *  This function will get an instance from an element
   *
   *  @date	5/3/18
   *  @since	5.6.9
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

  acf.getInstance = function ($el) {
    return $el.data('acf');
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  acf.getInstances
   *
   *  This function will get an array of instances from multiple elements
   *
   *  @date	5/3/18
   *  @since	5.6.9
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.getInstances = function ($el) {
    var instances = [];
    $el.each(function () {
      instances.push(acf.getInstance($(this)));
    });
    return instances;
  };
})(jQuery);

/***/ }),

/***/ "./src/advanced-custom-fields-pro/assets/src/js/_acf-notice.js":
/*!*********************************************************************!*\
  !*** ./src/advanced-custom-fields-pro/assets/src/js/_acf-notice.js ***!
  \*********************************************************************/
/***/ (() => {

(function ($, undefined) {
  var Notice = acf.Model.extend({
    data: {
      text: '',
      type: '',
      timeout: 0,
      dismiss: true,
      target: false,
      close: function () {}
    },
    events: {
      'click .acf-notice-dismiss': 'onClickClose'
    },
    tmpl: function () {
      return '<div class="acf-notice"></div>';
    },
    setup: function (props) {
      $.extend(this.data, props);
      this.$el = $(this.tmpl());
    },
    initialize: function () {
      // render
<<<<<<< HEAD
      this.render(); // show

=======
      this.render();

      // show
>>>>>>> update
      this.show();
    },
    render: function () {
      // class
<<<<<<< HEAD
      this.type(this.get('type')); // text

      this.html('<p>' + this.get('text') + '</p>'); // close

      if (this.get('dismiss')) {
        this.$el.append('<a href="#" class="acf-notice-dismiss acf-icon -cancel small"></a>');
        this.$el.addClass('-dismiss');
      } // timeout


      var timeout = this.get('timeout');

=======
      this.type(this.get('type'));

      // text
      this.html('<p>' + this.get('text') + '</p>');

      // close
      if (this.get('dismiss')) {
        this.$el.append('<a href="#" class="acf-notice-dismiss acf-icon -cancel small"></a>');
        this.$el.addClass('-dismiss');
      }

      // timeout
      var timeout = this.get('timeout');
>>>>>>> update
      if (timeout) {
        this.away(timeout);
      }
    },
    update: function (props) {
      // update
<<<<<<< HEAD
      $.extend(this.data, props); // re-initialize

      this.initialize(); // refresh events

=======
      $.extend(this.data, props);

      // re-initialize
      this.initialize();

      // refresh events
>>>>>>> update
      this.removeEvents();
      this.addEvents();
    },
    show: function () {
      var $target = this.get('target');
<<<<<<< HEAD

=======
>>>>>>> update
      if ($target) {
        $target.prepend(this.$el);
      }
    },
    hide: function () {
      this.$el.remove();
    },
    away: function (timeout) {
      this.setTimeout(function () {
        acf.remove(this.$el);
      }, timeout);
    },
    type: function (type) {
      // remove prev type
      var prevType = this.get('type');
<<<<<<< HEAD

      if (prevType) {
        this.$el.removeClass('-' + prevType);
      } // add new type


      this.$el.addClass('-' + type); // backwards compatibility

=======
      if (prevType) {
        this.$el.removeClass('-' + prevType);
      }

      // add new type
      this.$el.addClass('-' + type);

      // backwards compatibility
>>>>>>> update
      if (type == 'error') {
        this.$el.addClass('acf-error-message');
      }
    },
    html: function (html) {
      this.$el.html(acf.escHtml(html));
    },
    text: function (text) {
      this.$('p').html(acf.escHtml(text));
    },
    onClickClose: function (e, $el) {
      e.preventDefault();
      this.get('close').apply(this, arguments);
      this.remove();
    }
  });
<<<<<<< HEAD

=======
>>>>>>> update
  acf.newNotice = function (props) {
    // ensure object
    if (typeof props !== 'object') {
      props = {
        text: props
      };
<<<<<<< HEAD
    } // instantiate


    return new Notice(props);
  };

=======
    }

    // instantiate
    return new Notice(props);
  };
>>>>>>> update
  var noticeManager = new acf.Model({
    wait: 'prepare',
    priority: 1,
    initialize: function () {
<<<<<<< HEAD
      // vars
      var $notice = $('.acf-admin-notice'); // move to avoid WP flicker

      if ($notice.length) {
        $('h1:first').after($notice);
      }
=======
      const $notices = $('.acf-admin-notice');
      $notices.each(function () {
        if ($(this).data('persisted')) {
          let dismissed = acf.getPreference('dismissed-notices');
          if (dismissed && typeof dismissed == 'object' && dismissed.includes($(this).data('persist-id'))) {
            $(this).remove();
          } else {
            $(this).show();
            $(this).on('click', '.notice-dismiss', function (e) {
              dismissed = acf.getPreference('dismissed-notices');
              if (!dismissed || typeof dismissed != 'object') {
                dismissed = [];
              }
              dismissed.push($(this).closest('.acf-admin-notice').data('persist-id'));
              acf.setPreference('dismissed-notices', dismissed);
            });
          }
        }
      });
>>>>>>> update
    }
  });
})(jQuery);

/***/ }),

/***/ "./src/advanced-custom-fields-pro/assets/src/js/_acf-panel.js":
/*!********************************************************************!*\
  !*** ./src/advanced-custom-fields-pro/assets/src/js/_acf-panel.js ***!
  \********************************************************************/
/***/ (() => {

(function ($, undefined) {
  var panel = new acf.Model({
    events: {
      'click .acf-panel-title': 'onClick'
    },
    onClick: function (e, $el) {
      e.preventDefault();
      this.toggle($el.parent());
    },
    isOpen: function ($el) {
      return $el.hasClass('-open');
    },
    toggle: function ($el) {
      this.isOpen($el) ? this.close($el) : this.open($el);
    },
    open: function ($el) {
      $el.addClass('-open');
      $el.find('.acf-panel-title i').attr('class', 'dashicons dashicons-arrow-down');
    },
    close: function ($el) {
      $el.removeClass('-open');
      $el.find('.acf-panel-title i').attr('class', 'dashicons dashicons-arrow-right');
    }
  });
})(jQuery);

/***/ }),

/***/ "./src/advanced-custom-fields-pro/assets/src/js/_acf-popup.js":
/*!********************************************************************!*\
  !*** ./src/advanced-custom-fields-pro/assets/src/js/_acf-popup.js ***!
  \********************************************************************/
/***/ (() => {

(function ($, undefined) {
  acf.models.Popup = acf.Model.extend({
    data: {
      title: '',
      content: '',
      width: 0,
      height: 0,
<<<<<<< HEAD
      loading: false
    },
    events: {
      'click [data-event="close"]': 'onClickClose',
      'click .acf-close-popup': 'onClickClose'
=======
      loading: false,
      openedBy: null
    },
    events: {
      'click [data-event="close"]': 'onClickClose',
      'click .acf-close-popup': 'onClickClose',
      'keydown': 'onPressEscapeClose'
>>>>>>> update
    },
    setup: function (props) {
      $.extend(this.data, props);
      this.$el = $(this.tmpl());
    },
    initialize: function () {
      this.render();
      this.open();
<<<<<<< HEAD
    },
    tmpl: function () {
      return ['<div id="acf-popup">', '<div class="acf-popup-box acf-box">', '<div class="title"><h3></h3><a href="#" class="acf-icon -cancel grey" data-event="close"></a></div>', '<div class="inner"></div>', '<div class="loading"><i class="acf-loading"></i></div>', '</div>', '<div class="bg" data-event="close"></div>', '</div>'].join('');
=======
      this.focus();
      this.lockFocusToPopup(true);
    },
    tmpl: function () {
      return ['<div id="acf-popup" role="dialog" tabindex="-1">', '<div class="acf-popup-box acf-box">', '<div class="title"><h3></h3><a href="#" class="acf-icon -cancel grey" data-event="close" aria-label="' + acf.__('Close modal') + '"></a></div>', '<div class="inner"></div>', '<div class="loading"><i class="acf-loading"></i></div>', '</div>', '<div class="bg" data-event="close"></div>', '</div>'].join('');
>>>>>>> update
    },
    render: function () {
      // Extract Vars.
      var title = this.get('title');
      var content = this.get('content');
      var loading = this.get('loading');
      var width = this.get('width');
<<<<<<< HEAD
      var height = this.get('height'); // Update.

      this.title(title);
      this.content(content);

      if (width) {
        this.$('.acf-popup-box').css('width', width);
      }

      if (height) {
        this.$('.acf-popup-box').css('min-height', height);
      }

      this.loading(loading); // Trigger action.

      acf.doAction('append', this.$el);
    },
=======
      var height = this.get('height');

      // Update.
      this.title(title);
      this.content(content);
      if (width) {
        this.$('.acf-popup-box').css('width', width);
      }
      if (height) {
        this.$('.acf-popup-box').css('min-height', height);
      }
      this.loading(loading);

      // Trigger action.
      acf.doAction('append', this.$el);
    },
    /**
     * Places focus within the popup.
     */
    focus: function () {
      this.$el.find('.acf-icon').first().trigger('focus');
    },
    /**
     * Locks focus within the popup.
     *
     * @param {boolean} locked True to lock focus, false to unlock.
     */
    lockFocusToPopup: function (locked) {
      let inertElement = $('#wpwrap');
      if (!inertElement.length) {
        return;
      }
      inertElement[0].inert = locked;
      inertElement.attr('aria-hidden', locked);
    },
>>>>>>> update
    update: function (props) {
      this.data = acf.parseArgs(props, this.data);
      this.render();
    },
    title: function (title) {
      this.$('.title:first h3').html(title);
    },
    content: function (content) {
      this.$('.inner:first').html(content);
    },
    loading: function (show) {
      var $loading = this.$('.loading:first');
      show ? $loading.show() : $loading.hide();
    },
    open: function () {
      $('body').append(this.$el);
    },
    close: function () {
<<<<<<< HEAD
=======
      this.lockFocusToPopup(false);
      this.returnFocusToOrigin();
>>>>>>> update
      this.remove();
    },
    onClickClose: function (e, $el) {
      e.preventDefault();
      this.close();
<<<<<<< HEAD
    }
  });
=======
    },
    /**
     * Closes the popup when the escape key is pressed.
     *
     * @param {KeyboardEvent} e
     */
    onPressEscapeClose: function (e) {
      if (e.key === 'Escape') {
        this.close();
      }
    },
    /**
     * Returns focus to the element that opened the popup
     * if it still exists in the DOM.
     */
    returnFocusToOrigin: function () {
      if (this.data.openedBy instanceof $ && this.data.openedBy.closest('body').length > 0) {
        this.data.openedBy.trigger('focus');
      }
    }
  });

>>>>>>> update
  /**
   *  newPopup
   *
   *  Creates a new Popup with the supplied props
   *
   *  @date	17/12/17
   *  @since	5.6.5
   *
   *  @param	object props
   *  @return	object
   */

  acf.newPopup = function (props) {
    return new acf.models.Popup(props);
  };
})(jQuery);

/***/ }),

/***/ "./src/advanced-custom-fields-pro/assets/src/js/_acf-tooltip.js":
/*!**********************************************************************!*\
  !*** ./src/advanced-custom-fields-pro/assets/src/js/_acf-tooltip.js ***!
  \**********************************************************************/
/***/ (() => {

(function ($, undefined) {
  acf.newTooltip = function (props) {
    // ensure object
    if (typeof props !== 'object') {
      props = {
        text: props
      };
<<<<<<< HEAD
    } // confirmRemove


    if (props.confirmRemove !== undefined) {
      props.textConfirm = acf.__('Remove');
      props.textCancel = acf.__('Cancel');
      return new TooltipConfirm(props); // confirm
    } else if (props.confirm !== undefined) {
      return new TooltipConfirm(props); // default
=======
    }

    // confirmRemove
    if (props.confirmRemove !== undefined) {
      props.textConfirm = acf.__('Remove');
      props.textCancel = acf.__('Cancel');
      return new TooltipConfirm(props);

      // confirm
    } else if (props.confirm !== undefined) {
      return new TooltipConfirm(props);

      // default
>>>>>>> update
    } else {
      return new Tooltip(props);
    }
  };
<<<<<<< HEAD

=======
>>>>>>> update
  var Tooltip = acf.Model.extend({
    data: {
      text: '',
      timeout: 0,
      target: null
    },
    tmpl: function () {
      return '<div class="acf-tooltip"></div>';
    },
    setup: function (props) {
      $.extend(this.data, props);
      this.$el = $(this.tmpl());
    },
    initialize: function () {
      // render
<<<<<<< HEAD
      this.render(); // append

      this.show(); // position

      this.position(); // timeout

      var timeout = this.get('timeout');

=======
      this.render();

      // append
      this.show();

      // position
      this.position();

      // timeout
      var timeout = this.get('timeout');
>>>>>>> update
      if (timeout) {
        setTimeout($.proxy(this.fade, this), timeout);
      }
    },
    update: function (props) {
      $.extend(this.data, props);
      this.initialize();
    },
    render: function () {
      this.html(this.get('text'));
    },
    show: function () {
      $('body').append(this.$el);
    },
    hide: function () {
      this.$el.remove();
    },
    fade: function () {
      // add class
<<<<<<< HEAD
      this.$el.addClass('acf-fade-up'); // remove

=======
      this.$el.addClass('acf-fade-up');

      // remove
>>>>>>> update
      this.setTimeout(function () {
        this.remove();
      }, 250);
    },
    html: function (html) {
      this.$el.html(html);
    },
    position: function () {
      // vars
      var $tooltip = this.$el;
      var $target = this.get('target');
<<<<<<< HEAD
      if (!$target) return; // Reset position.

      $tooltip.removeClass('right left bottom top').css({
        top: 0,
        left: 0
      }); // Declare tollerance to edge of screen.

      var tolerance = 10; // Find target position.

      var targetWidth = $target.outerWidth();
      var targetHeight = $target.outerHeight();
      var targetTop = $target.offset().top;
      var targetLeft = $target.offset().left; // Find tooltip position.

      var tooltipWidth = $tooltip.outerWidth();
      var tooltipHeight = $tooltip.outerHeight();
      var tooltipTop = $tooltip.offset().top; // Should be 0, but WP media grid causes this to be 32 (toolbar padding).
      // Assume default top alignment.

      var top = targetTop - tooltipHeight - tooltipTop;
      var left = targetLeft + targetWidth / 2 - tooltipWidth / 2; // Check if too far left.

      if (left < tolerance) {
        $tooltip.addClass('right');
        left = targetLeft + targetWidth;
        top = targetTop + targetHeight / 2 - tooltipHeight / 2 - tooltipTop; // Check if too far right.
      } else if (left + tooltipWidth + tolerance > $(window).width()) {
        $tooltip.addClass('left');
        left = targetLeft - tooltipWidth;
        top = targetTop + targetHeight / 2 - tooltipHeight / 2 - tooltipTop; // Check if too far up.
      } else if (top - $(window).scrollTop() < tolerance) {
        $tooltip.addClass('bottom');
        top = targetTop + targetHeight - tooltipTop; // No colision with edges.
      } else {
        $tooltip.addClass('top');
      } // update css


=======
      if (!$target) return;

      // Reset position.
      $tooltip.removeClass('right left bottom top').css({
        top: 0,
        left: 0
      });

      // Declare tollerance to edge of screen.
      var tolerance = 10;

      // Find target position.
      var targetWidth = $target.outerWidth();
      var targetHeight = $target.outerHeight();
      var targetTop = $target.offset().top;
      var targetLeft = $target.offset().left;

      // Find tooltip position.
      var tooltipWidth = $tooltip.outerWidth();
      var tooltipHeight = $tooltip.outerHeight();
      var tooltipTop = $tooltip.offset().top; // Should be 0, but WP media grid causes this to be 32 (toolbar padding).

      // Assume default top alignment.
      var top = targetTop - tooltipHeight - tooltipTop;
      var left = targetLeft + targetWidth / 2 - tooltipWidth / 2;

      // Check if too far left.
      if (left < tolerance) {
        $tooltip.addClass('right');
        left = targetLeft + targetWidth;
        top = targetTop + targetHeight / 2 - tooltipHeight / 2 - tooltipTop;

        // Check if too far right.
      } else if (left + tooltipWidth + tolerance > $(window).width()) {
        $tooltip.addClass('left');
        left = targetLeft - tooltipWidth;
        top = targetTop + targetHeight / 2 - tooltipHeight / 2 - tooltipTop;

        // Check if too far up.
      } else if (top - $(window).scrollTop() < tolerance) {
        $tooltip.addClass('bottom');
        top = targetTop + targetHeight - tooltipTop;

        // No colision with edges.
      } else {
        $tooltip.addClass('top');
      }

      // update css
>>>>>>> update
      $tooltip.css({
        top: top,
        left: left
      });
    }
  });
  var TooltipConfirm = Tooltip.extend({
    data: {
      text: '',
      textConfirm: '',
      textCancel: '',
      target: null,
      targetConfirm: true,
      confirm: function () {},
      cancel: function () {},
      context: false
    },
    events: {
      'click [data-event="cancel"]': 'onCancel',
      'click [data-event="confirm"]': 'onConfirm'
    },
    addEvents: function () {
      // add events
<<<<<<< HEAD
      acf.Model.prototype.addEvents.apply(this); // vars

      var $document = $(document);
      var $target = this.get('target'); // add global 'cancel' click event
      // - use timeout to avoid the current 'click' event triggering the onCancel function

      this.setTimeout(function () {
        this.on($document, 'click', 'onCancel');
      }); // add target 'confirm' click event
      // - allow setting to control this feature

=======
      acf.Model.prototype.addEvents.apply(this);

      // vars
      var $document = $(document);
      var $target = this.get('target');

      // add global 'cancel' click event
      // - use timeout to avoid the current 'click' event triggering the onCancel function
      this.setTimeout(function () {
        this.on($document, 'click', 'onCancel');
      });

      // add target 'confirm' click event
      // - allow setting to control this feature
>>>>>>> update
      if (this.get('targetConfirm')) {
        this.on($target, 'click', 'onConfirm');
      }
    },
    removeEvents: function () {
      // remove events
<<<<<<< HEAD
      acf.Model.prototype.removeEvents.apply(this); // vars

      var $document = $(document);
      var $target = this.get('target'); // remove custom events

=======
      acf.Model.prototype.removeEvents.apply(this);

      // vars
      var $document = $(document);
      var $target = this.get('target');

      // remove custom events
>>>>>>> update
      this.off($document, 'click');
      this.off($target, 'click');
    },
    render: function () {
      // defaults
      var text = this.get('text') || acf.__('Are you sure?');
<<<<<<< HEAD

      var textConfirm = this.get('textConfirm') || acf.__('Yes');

      var textCancel = this.get('textCancel') || acf.__('No'); // html


      var html = [text, '<a href="#" data-event="confirm">' + textConfirm + '</a>', '<a href="#" data-event="cancel">' + textCancel + '</a>'].join(' '); // html

      this.html(html); // class

=======
      var textConfirm = this.get('textConfirm') || acf.__('Yes');
      var textCancel = this.get('textCancel') || acf.__('No');

      // html
      var html = [text, '<a href="#" data-event="confirm">' + textConfirm + '</a>', '<a href="#" data-event="cancel">' + textCancel + '</a>'].join(' ');

      // html
      this.html(html);

      // class
>>>>>>> update
      this.$el.addClass('-confirm');
    },
    onCancel: function (e, $el) {
      // prevent default
      e.preventDefault();
<<<<<<< HEAD
      e.stopImmediatePropagation(); // callback

      var callback = this.get('cancel');
      var context = this.get('context') || this;
      callback.apply(context, arguments); //remove

=======
      e.stopImmediatePropagation();

      // callback
      var callback = this.get('cancel');
      var context = this.get('context') || this;
      callback.apply(context, arguments);

      //remove
>>>>>>> update
      this.remove();
    },
    onConfirm: function (e, $el) {
      // Prevent event from propagating completely to allow "targetConfirm" to be clicked.
      e.preventDefault();
<<<<<<< HEAD
      e.stopImmediatePropagation(); // callback

      var callback = this.get('confirm');
      var context = this.get('context') || this;
      callback.apply(context, arguments); //remove

      this.remove();
    }
  }); // storage

  acf.models.Tooltip = Tooltip;
  acf.models.TooltipConfirm = TooltipConfirm;
=======
      e.stopImmediatePropagation();

      // callback
      var callback = this.get('confirm');
      var context = this.get('context') || this;
      callback.apply(context, arguments);

      //remove
      this.remove();
    }
  });

  // storage
  acf.models.Tooltip = Tooltip;
  acf.models.TooltipConfirm = TooltipConfirm;

>>>>>>> update
  /**
   *  tooltipManager
   *
   *  description
   *
   *  @date	17/4/18
   *  @since	5.6.9
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

  var tooltipHoverHelper = new acf.Model({
    tooltip: false,
    events: {
      'mouseenter .acf-js-tooltip': 'showTitle',
      'mouseup .acf-js-tooltip': 'hideTitle',
<<<<<<< HEAD
      'mouseleave .acf-js-tooltip': 'hideTitle'
    },
    showTitle: function (e, $el) {
      // vars
      var title = $el.attr('title'); // bail ealry if no title

      if (!title) {
        return;
      } // clear title to avoid default browser tooltip


      $el.attr('title', ''); // create

=======
      'mouseleave .acf-js-tooltip': 'hideTitle',
      'focus .acf-js-tooltip': 'showTitle',
      'blur .acf-js-tooltip': 'hideTitle',
      'keyup .acf-js-tooltip': 'onKeyUp'
    },
    showTitle: function (e, $el) {
      // vars
      var title = $el.attr('title');

      // bail early if no title
      if (!title) {
        return;
      }

      // clear title to avoid default browser tooltip
      $el.attr('title', '');

      // create
>>>>>>> update
      if (!this.tooltip) {
        this.tooltip = acf.newTooltip({
          text: title,
          target: $el
<<<<<<< HEAD
        }); // update
=======
        });

        // update
>>>>>>> update
      } else {
        this.tooltip.update({
          text: title,
          target: $el
        });
      }
    },
    hideTitle: function (e, $el) {
      // hide tooltip
<<<<<<< HEAD
      this.tooltip.hide(); // restore title

      $el.attr('title', this.tooltip.get('text'));
=======
      this.tooltip.hide();

      // restore title
      $el.attr('title', this.tooltip.get('text'));
    },
    onKeyUp: function (e, $el) {
      if ('Escape' === e.key) {
        this.hideTitle(e, $el);
      }
>>>>>>> update
    }
  });
})(jQuery);

/***/ }),

/***/ "./src/advanced-custom-fields-pro/assets/src/js/_acf.js":
/*!**************************************************************!*\
  !*** ./src/advanced-custom-fields-pro/assets/src/js/_acf.js ***!
  \**************************************************************/
/***/ (() => {

(function ($, undefined) {
  /**
   *  acf
   *
   *  description
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */
<<<<<<< HEAD
  // The global acf object
  var acf = {}; // Set as a browser global

  window.acf = acf;
  /** @var object Data sent from PHP */

  acf.data = {};
=======

  // The global acf object
  var acf = {};

  // Set as a browser global
  window.acf = acf;

  /** @var object Data sent from PHP */
  acf.data = {};

>>>>>>> update
  /**
   *  get
   *
   *  Gets a specific data value
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	string name
   *  @return	mixed
   */

  acf.get = function (name) {
    return this.data[name] || null;
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  has
   *
   *  Returns `true` if the data exists and is not null
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	string name
   *  @return	boolean
   */

<<<<<<< HEAD

  acf.has = function (name) {
    return this.get(name) !== null;
  };
=======
  acf.has = function (name) {
    return this.get(name) !== null;
  };

>>>>>>> update
  /**
   *  set
   *
   *  Sets a specific data value
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	string name
   *  @param	mixed value
   *  @return	this
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.set = function (name, value) {
    this.data[name] = value;
    return this;
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  uniqueId
   *
   *  Returns a unique ID
   *
   *  @date	9/11/17
   *  @since	5.6.3
   *
   *  @param	string prefix Optional prefix.
   *  @return	string
   */

<<<<<<< HEAD

  var idCounter = 0;

=======
  var idCounter = 0;
>>>>>>> update
  acf.uniqueId = function (prefix) {
    var id = ++idCounter + '';
    return prefix ? prefix + id : id;
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  acf.uniqueArray
   *
   *  Returns a new array with only unique values
   *  Credit: https://stackoverflow.com/questions/1960473/get-all-unique-values-in-an-array-remove-duplicates
   *
   *  @date	23/3/18
   *  @since	5.6.9
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.uniqueArray = function (array) {
    function onlyUnique(value, index, self) {
      return self.indexOf(value) === index;
    }
<<<<<<< HEAD

    return array.filter(onlyUnique);
  };
=======
    return array.filter(onlyUnique);
  };

>>>>>>> update
  /**
   *  uniqid
   *
   *  Returns a unique ID (PHP version)
   *
   *  @date	9/11/17
   *  @since	5.6.3
   *  @source	http://locutus.io/php/misc/uniqid/
   *
   *  @param	string prefix Optional prefix.
   *  @return	string
   */

<<<<<<< HEAD

  var uniqidSeed = '';

=======
  var uniqidSeed = '';
>>>>>>> update
  acf.uniqid = function (prefix, moreEntropy) {
    //  discuss at: http://locutus.io/php/uniqid/
    // original by: Kevin van Zonneveld (http://kvz.io)
    //  revised by: Kankrelune (http://www.webfaktory.info/)
    //      note 1: Uses an internal counter (in locutus global) to avoid collision
    //   example 1: var $id = uniqid()
    //   example 1: var $result = $id.length === 13
    //   returns 1: true
    //   example 2: var $id = uniqid('foo')
    //   example 2: var $result = $id.length === (13 + 'foo'.length)
    //   returns 2: true
    //   example 3: var $id = uniqid('bar', true)
    //   example 3: var $result = $id.length === (23 + 'bar'.length)
    //   returns 3: true
    if (typeof prefix === 'undefined') {
      prefix = '';
    }
<<<<<<< HEAD

    var retId;

    var formatSeed = function (seed, reqWidth) {
      seed = parseInt(seed, 10).toString(16); // to hex str

=======
    var retId;
    var formatSeed = function (seed, reqWidth) {
      seed = parseInt(seed, 10).toString(16); // to hex str
>>>>>>> update
      if (reqWidth < seed.length) {
        // so long we split
        return seed.slice(seed.length - reqWidth);
      }
<<<<<<< HEAD

=======
>>>>>>> update
      if (reqWidth > seed.length) {
        // so short we pad
        return Array(1 + (reqWidth - seed.length)).join('0') + seed;
      }
<<<<<<< HEAD

      return seed;
    };

=======
      return seed;
    };
>>>>>>> update
    if (!uniqidSeed) {
      // init seed with big random int
      uniqidSeed = Math.floor(Math.random() * 0x75bcd15);
    }
<<<<<<< HEAD

    uniqidSeed++;
    retId = prefix; // start with prefix, add current milliseconds hex string

    retId += formatSeed(parseInt(new Date().getTime() / 1000, 10), 8);
    retId += formatSeed(uniqidSeed, 5); // add seed hex string

=======
    uniqidSeed++;
    retId = prefix; // start with prefix, add current milliseconds hex string
    retId += formatSeed(parseInt(new Date().getTime() / 1000, 10), 8);
    retId += formatSeed(uniqidSeed, 5); // add seed hex string
>>>>>>> update
    if (moreEntropy) {
      // for more entropy we add a float lower to 10
      retId += (Math.random() * 10).toFixed(8).toString();
    }
<<<<<<< HEAD

    return retId;
  };
=======
    return retId;
  };

>>>>>>> update
  /**
   *  strReplace
   *
   *  Performs a string replace
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	string search
   *  @param	string replace
   *  @param	string subject
   *  @return	string
   */

<<<<<<< HEAD

  acf.strReplace = function (search, replace, subject) {
    return subject.split(search).join(replace);
  };
=======
  acf.strReplace = function (search, replace, subject) {
    return subject.split(search).join(replace);
  };

>>>>>>> update
  /**
   *  strCamelCase
   *
   *  Converts a string into camelCase
   *  Thanks to https://stackoverflow.com/questions/2970525/converting-any-string-into-camel-case
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	string str
   *  @return	string
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.strCamelCase = function (str) {
    var matches = str.match(/([a-zA-Z0-9]+)/g);
    return matches ? matches.map(function (s, i) {
      var c = s.charAt(0);
      return (i === 0 ? c.toLowerCase() : c.toUpperCase()) + s.slice(1);
    }).join('') : '';
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  strPascalCase
   *
   *  Converts a string into PascalCase
   *  Thanks to https://stackoverflow.com/questions/1026069/how-do-i-make-the-first-letter-of-a-string-uppercase-in-javascript
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	string str
   *  @return	string
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.strPascalCase = function (str) {
    var camel = acf.strCamelCase(str);
    return camel.charAt(0).toUpperCase() + camel.slice(1);
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  acf.strSlugify
   *
   *  Converts a string into a HTML class friendly slug
   *
   *  @date	21/3/18
   *  @since	5.6.9
   *
   *  @param	string str
   *  @return	string
   */

<<<<<<< HEAD

  acf.strSlugify = function (str) {
    return acf.strReplace('_', '-', str.toLowerCase());
  };

=======
  acf.strSlugify = function (str) {
    return acf.strReplace('_', '-', str.toLowerCase());
  };
>>>>>>> update
  acf.strSanitize = function (str) {
    // chars (https://jsperf.com/replace-foreign-characters)
    var map = {
      À: 'A',
      Á: 'A',
      Â: 'A',
      Ã: 'A',
      Ä: 'A',
      Å: 'A',
      Æ: 'AE',
      Ç: 'C',
      È: 'E',
      É: 'E',
      Ê: 'E',
      Ë: 'E',
      Ì: 'I',
      Í: 'I',
      Î: 'I',
      Ï: 'I',
      Ð: 'D',
      Ñ: 'N',
      Ò: 'O',
      Ó: 'O',
      Ô: 'O',
      Õ: 'O',
      Ö: 'O',
      Ø: 'O',
      Ù: 'U',
      Ú: 'U',
      Û: 'U',
      Ü: 'U',
      Ý: 'Y',
      ß: 's',
      à: 'a',
      á: 'a',
      â: 'a',
      ã: 'a',
      ä: 'a',
      å: 'a',
      æ: 'ae',
      ç: 'c',
      è: 'e',
      é: 'e',
      ê: 'e',
      ë: 'e',
      ì: 'i',
      í: 'i',
      î: 'i',
      ï: 'i',
      ñ: 'n',
      ò: 'o',
      ó: 'o',
      ô: 'o',
      õ: 'o',
      ö: 'o',
      ø: 'o',
      ù: 'u',
      ú: 'u',
      û: 'u',
      ü: 'u',
      ý: 'y',
      ÿ: 'y',
      Ā: 'A',
      ā: 'a',
      Ă: 'A',
      ă: 'a',
      Ą: 'A',
      ą: 'a',
      Ć: 'C',
      ć: 'c',
      Ĉ: 'C',
      ĉ: 'c',
      Ċ: 'C',
      ċ: 'c',
      Č: 'C',
      č: 'c',
      Ď: 'D',
      ď: 'd',
      Đ: 'D',
      đ: 'd',
      Ē: 'E',
      ē: 'e',
      Ĕ: 'E',
      ĕ: 'e',
      Ė: 'E',
      ė: 'e',
      Ę: 'E',
      ę: 'e',
      Ě: 'E',
      ě: 'e',
      Ĝ: 'G',
      ĝ: 'g',
      Ğ: 'G',
      ğ: 'g',
      Ġ: 'G',
      ġ: 'g',
      Ģ: 'G',
      ģ: 'g',
      Ĥ: 'H',
      ĥ: 'h',
      Ħ: 'H',
      ħ: 'h',
      Ĩ: 'I',
      ĩ: 'i',
      Ī: 'I',
      ī: 'i',
      Ĭ: 'I',
      ĭ: 'i',
      Į: 'I',
      į: 'i',
      İ: 'I',
      ı: 'i',
      Ĳ: 'IJ',
      ĳ: 'ij',
      Ĵ: 'J',
      ĵ: 'j',
      Ķ: 'K',
      ķ: 'k',
      Ĺ: 'L',
      ĺ: 'l',
      Ļ: 'L',
      ļ: 'l',
      Ľ: 'L',
      ľ: 'l',
      Ŀ: 'L',
      ŀ: 'l',
      Ł: 'l',
      ł: 'l',
      Ń: 'N',
      ń: 'n',
      Ņ: 'N',
      ņ: 'n',
      Ň: 'N',
      ň: 'n',
      ŉ: 'n',
      Ō: 'O',
      ō: 'o',
      Ŏ: 'O',
      ŏ: 'o',
      Ő: 'O',
      ő: 'o',
      Œ: 'OE',
      œ: 'oe',
      Ŕ: 'R',
      ŕ: 'r',
      Ŗ: 'R',
      ŗ: 'r',
      Ř: 'R',
      ř: 'r',
      Ś: 'S',
      ś: 's',
      Ŝ: 'S',
      ŝ: 's',
      Ş: 'S',
      ş: 's',
      Š: 'S',
      š: 's',
      Ţ: 'T',
      ţ: 't',
      Ť: 'T',
      ť: 't',
      Ŧ: 'T',
      ŧ: 't',
      Ũ: 'U',
      ũ: 'u',
      Ū: 'U',
      ū: 'u',
      Ŭ: 'U',
      ŭ: 'u',
      Ů: 'U',
      ů: 'u',
      Ű: 'U',
      ű: 'u',
      Ų: 'U',
      ų: 'u',
      Ŵ: 'W',
      ŵ: 'w',
      Ŷ: 'Y',
      ŷ: 'y',
      Ÿ: 'Y',
      Ź: 'Z',
      ź: 'z',
      Ż: 'Z',
      ż: 'z',
      Ž: 'Z',
      ž: 'z',
      ſ: 's',
      ƒ: 'f',
      Ơ: 'O',
      ơ: 'o',
      Ư: 'U',
      ư: 'u',
      Ǎ: 'A',
      ǎ: 'a',
      Ǐ: 'I',
      ǐ: 'i',
      Ǒ: 'O',
      ǒ: 'o',
      Ǔ: 'U',
      ǔ: 'u',
      Ǖ: 'U',
      ǖ: 'u',
      Ǘ: 'U',
      ǘ: 'u',
      Ǚ: 'U',
      ǚ: 'u',
      Ǜ: 'U',
      ǜ: 'u',
      Ǻ: 'A',
      ǻ: 'a',
      Ǽ: 'AE',
      ǽ: 'ae',
      Ǿ: 'O',
      ǿ: 'o',
      // extra
      ' ': '_',
      "'": '',
      '?': '',
      '/': '',
      '\\': '',
      '.': '',
      ',': '',
      '`': '',
      '>': '',
      '<': '',
      '"': '',
      '[': '',
      ']': '',
      '|': '',
      '{': '',
      '}': '',
      '(': '',
      ')': ''
<<<<<<< HEAD
    }; // vars

    var nonWord = /\W/g;

    var mapping = function (c) {
      return map[c] !== undefined ? map[c] : c;
    }; // replace


    str = str.replace(nonWord, mapping); // lowercase

    str = str.toLowerCase(); // return

    return str;
  };
=======
    };

    // vars
    var nonWord = /\W/g;
    var mapping = function (c) {
      return map[c] !== undefined ? map[c] : c;
    };

    // replace
    str = str.replace(nonWord, mapping);

    // lowercase
    str = str.toLowerCase();

    // return
    return str;
  };

>>>>>>> update
  /**
   *  acf.strMatch
   *
   *  Returns the number of characters that match between two strings
   *
   *  @date	1/2/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

  acf.strMatch = function (s1, s2) {
    // vars
    var val = 0;
    var min = Math.min(s1.length, s2.length); // loop

=======
  acf.strMatch = function (s1, s2) {
    // vars
    var val = 0;
    var min = Math.min(s1.length, s2.length);

    // loop
>>>>>>> update
    for (var i = 0; i < min; i++) {
      if (s1[i] !== s2[i]) {
        break;
      }
<<<<<<< HEAD

      val++;
    } // return


    return val;
  };
=======
      val++;
    }

    // return
    return val;
  };

>>>>>>> update
  /**
   * Escapes HTML entities from a string.
   *
   * @date	08/06/2020
   * @since	5.9.0
   *
   * @param	string string The input string.
   * @return	string
   */
<<<<<<< HEAD


=======
>>>>>>> update
  acf.strEscape = function (string) {
    var htmlEscapes = {
      '&': '&amp;',
      '<': '&lt;',
      '>': '&gt;',
      '"': '&quot;',
      "'": '&#39;'
    };
    return ('' + string).replace(/[&<>"']/g, function (chr) {
      return htmlEscapes[chr];
    });
<<<<<<< HEAD
  }; // Tests.
=======
  };

  // Tests.
>>>>>>> update
  //console.log( acf.strEscape('Test 1') );
  //console.log( acf.strEscape('Test & 1') );
  //console.log( acf.strEscape('Test\'s &amp; 1') );
  //console.log( acf.strEscape('<script>js</script>') );

  /**
   * Unescapes HTML entities from a string.
   *
   * @date	08/06/2020
   * @since	5.9.0
   *
   * @param	string string The input string.
   * @return	string
   */
<<<<<<< HEAD


=======
>>>>>>> update
  acf.strUnescape = function (string) {
    var htmlUnescapes = {
      '&amp;': '&',
      '&lt;': '<',
      '&gt;': '>',
      '&quot;': '"',
      '&#39;': "'"
    };
    return ('' + string).replace(/&amp;|&lt;|&gt;|&quot;|&#39;/g, function (entity) {
      return htmlUnescapes[entity];
    });
<<<<<<< HEAD
  }; // Tests.
=======
  };

  // Tests.
>>>>>>> update
  //console.log( acf.strUnescape( acf.strEscape('Test 1') ) );
  //console.log( acf.strUnescape( acf.strEscape('Test & 1') ) );
  //console.log( acf.strUnescape( acf.strEscape('Test\'s &amp; 1') ) );
  //console.log( acf.strUnescape( acf.strEscape('<script>js</script>') ) );

  /**
   * Escapes HTML entities from a string.
   *
   * @date	08/06/2020
   * @since	5.9.0
   *
   * @param	string string The input string.
   * @return	string
   */
<<<<<<< HEAD


  acf.escAttr = acf.strEscape;
=======
  acf.escAttr = acf.strEscape;

>>>>>>> update
  /**
   * Encodes <script> tags for safe HTML output.
   *
   * @date	08/06/2020
   * @since	5.9.0
   *
   * @param	string string The input string.
   * @return	string
   */
<<<<<<< HEAD

=======
>>>>>>> update
  acf.escHtml = function (string) {
    return ('' + string).replace(/<script|<\/script/g, function (html) {
      return acf.strEscape(html);
    });
<<<<<<< HEAD
  }; // Tests.
=======
  };

  // Tests.
>>>>>>> update
  //console.log( acf.escHtml('<script>js</script>') );
  //console.log( acf.escHtml( acf.strEscape('<script>js</script>') ) );
  //console.log( acf.escHtml( '<script>js1</script><script>js2</script>' ) );

  /**
   *  acf.decode
   *
   *  description
   *
   *  @date	13/1/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

  acf.decode = function (string) {
    return $('<textarea/>').html(string).text();
  };
=======
  acf.decode = function (string) {
    return $('<textarea/>').html(string).text();
  };

>>>>>>> update
  /**
   *  parseArgs
   *
   *  Merges together defaults and args much like the WP wp_parse_args function
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	object args
   *  @param	object defaults
   *  @return	object
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.parseArgs = function (args, defaults) {
    if (typeof args !== 'object') args = {};
    if (typeof defaults !== 'object') defaults = {};
    return $.extend({}, defaults, args);
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  __
   *
   *  Retrieve the translation of $text.
   *
   *  @date	16/4/18
   *  @since	5.6.9
   *
   *  @param	string text Text to translate.
   *  @return	string Translated text.
   */

<<<<<<< HEAD

  if (window.acfL10n == undefined) {
    acfL10n = {};
  }

  acf.__ = function (text) {
    return acfL10n[text] || text;
  };
=======
  if (window.acfL10n == undefined) {
    acfL10n = {};
  }
  acf.__ = function (text) {
    return acfL10n[text] || text;
  };

>>>>>>> update
  /**
   *  _x
   *
   *  Retrieve translated string with gettext context.
   *
   *  @date	16/4/18
   *  @since	5.6.9
   *
   *  @param	string text Text to translate.
   *  @param	string context Context information for the translators.
   *  @return	string Translated text.
   */

<<<<<<< HEAD

  acf._x = function (text, context) {
    return acfL10n[text + '.' + context] || acfL10n[text] || text;
  };
=======
  acf._x = function (text, context) {
    return acfL10n[text + '.' + context] || acfL10n[text] || text;
  };

>>>>>>> update
  /**
   *  _n
   *
   *  Retrieve the plural or single form based on the amount.
   *
   *  @date	16/4/18
   *  @since	5.6.9
   *
   *  @param	string single Single text to translate.
   *  @param	string plural Plural text to translate.
   *  @param	int number The number to compare against.
   *  @return	string Translated text.
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf._n = function (single, plural, number) {
    if (number == 1) {
      return acf.__(single);
    } else {
      return acf.__(plural);
    }
  };
<<<<<<< HEAD

  acf.isArray = function (a) {
    return Array.isArray(a);
  };

  acf.isObject = function (a) {
    return typeof a === 'object';
  };
=======
  acf.isArray = function (a) {
    return Array.isArray(a);
  };
  acf.isObject = function (a) {
    return typeof a === 'object';
  };

>>>>>>> update
  /**
   *  serialize
   *
   *  description
   *
   *  @date	24/12/17
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

  var buildObject = function (obj, name, value) {
    // replace [] with placeholder
    name = name.replace('[]', '[%%index%%]'); // vars

    var keys = name.match(/([^\[\]])+/g);
    if (!keys) return;
    var length = keys.length;
    var ref = obj; // loop

    for (var i = 0; i < length; i++) {
      // vars
      var key = String(keys[i]); // value

      if (i == length - 1) {
        // %%index%%
        if (key === '%%index%%') {
          ref.push(value); // default
        } else {
          ref[key] = value;
        } // path

=======
  var buildObject = function (obj, name, value) {
    // replace [] with placeholder
    name = name.replace('[]', '[%%index%%]');

    // vars
    var keys = name.match(/([^\[\]])+/g);
    if (!keys) return;
    var length = keys.length;
    var ref = obj;

    // loop
    for (var i = 0; i < length; i++) {
      // vars
      var key = String(keys[i]);

      // value
      if (i == length - 1) {
        // %%index%%
        if (key === '%%index%%') {
          ref.push(value);

          // default
        } else {
          ref[key] = value;
        }

        // path
>>>>>>> update
      } else {
        // array
        if (keys[i + 1] === '%%index%%') {
          if (!acf.isArray(ref[key])) {
            ref[key] = [];
<<<<<<< HEAD
          } // object

=======
          }

          // object
>>>>>>> update
        } else {
          if (!acf.isObject(ref[key])) {
            ref[key] = {};
          }
<<<<<<< HEAD
        } // crawl


=======
        }

        // crawl
>>>>>>> update
        ref = ref[key];
      }
    }
  };
<<<<<<< HEAD

  acf.serialize = function ($el, prefix) {
    // vars
    var obj = {};
    var inputs = acf.serializeArray($el); // prefix

=======
  acf.serialize = function ($el, prefix) {
    // vars
    var obj = {};
    var inputs = acf.serializeArray($el);

    // prefix
>>>>>>> update
    if (prefix !== undefined) {
      // filter and modify
      inputs = inputs.filter(function (item) {
        return item.name.indexOf(prefix) === 0;
      }).map(function (item) {
        item.name = item.name.slice(prefix.length);
        return item;
      });
<<<<<<< HEAD
    } // loop


    for (var i = 0; i < inputs.length; i++) {
      buildObject(obj, inputs[i].name, inputs[i].value);
    } // return


    return obj;
  };
=======
    }

    // loop
    for (var i = 0; i < inputs.length; i++) {
      buildObject(obj, inputs[i].name, inputs[i].value);
    }

    // return
    return obj;
  };

>>>>>>> update
  /**
   *  acf.serializeArray
   *
   *  Similar to $.serializeArray() but works with a parent wrapping element.
   *
   *  @date	19/8/18
   *  @since	5.7.3
   *
   *  @param	jQuery $el The element or form to serialize.
   *  @return	array
   */

<<<<<<< HEAD

  acf.serializeArray = function ($el) {
    return $el.find('select, textarea, input').serializeArray();
  };
=======
  acf.serializeArray = function ($el) {
    return $el.find('select, textarea, input').serializeArray();
  };

>>>>>>> update
  /**
   *  acf.serializeForAjax
   *
   *  Returns an object containing name => value data ready to be encoded for Ajax.
   *
   *  @date	17/12/18
   *  @since	5.8.0
   *
   *  @param	jQUery $el The element or form to serialize.
   *  @return	object
   */
<<<<<<< HEAD


  acf.serializeForAjax = function ($el) {
    // vars
    var data = {};
    var index = {}; // Serialize inputs.

    var inputs = acf.serializeArray($el); // Loop over inputs and build data.

=======
  acf.serializeForAjax = function ($el) {
    // vars
    var data = {};
    var index = {};

    // Serialize inputs.
    var inputs = acf.serializeArray($el);

    // Loop over inputs and build data.
>>>>>>> update
    inputs.map(function (item) {
      // Append to array.
      if (item.name.slice(-2) === '[]') {
        data[item.name] = data[item.name] || [];
<<<<<<< HEAD
        data[item.name].push(item.value); // Append
      } else {
        data[item.name] = item.value;
      }
    }); // return

    return data;
  };
=======
        data[item.name].push(item.value);
        // Append
      } else {
        data[item.name] = item.value;
      }
    });

    // return
    return data;
  };

>>>>>>> update
  /**
   *  addAction
   *
   *  Wrapper for acf.hooks.addAction
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	n/a
   *  @return	this
   */

  /*
  var prefixAction = function( action ){
  	return 'acf_' + action;
  }
  */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.addAction = function (action, callback, priority, context) {
    //action = prefixAction(action);
    acf.hooks.addAction.apply(this, arguments);
    return this;
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  removeAction
   *
   *  Wrapper for acf.hooks.removeAction
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	n/a
   *  @return	this
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.removeAction = function (action, callback) {
    //action = prefixAction(action);
    acf.hooks.removeAction.apply(this, arguments);
    return this;
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  doAction
   *
   *  Wrapper for acf.hooks.doAction
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	n/a
   *  @return	this
   */

<<<<<<< HEAD

  var actionHistory = {}; //var currentAction = false;

=======
  var actionHistory = {};
  //var currentAction = false;
>>>>>>> update
  acf.doAction = function (action) {
    //action = prefixAction(action);
    //currentAction = action;
    actionHistory[action] = 1;
    acf.hooks.doAction.apply(this, arguments);
    actionHistory[action] = 0;
    return this;
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  doingAction
   *
   *  Return true if doing action
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	n/a
   *  @return	this
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.doingAction = function (action) {
    //action = prefixAction(action);
    return actionHistory[action] === 1;
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  didAction
   *
   *  Wrapper for acf.hooks.doAction
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	n/a
   *  @return	this
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.didAction = function (action) {
    //action = prefixAction(action);
    return actionHistory[action] !== undefined;
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  currentAction
   *
   *  Wrapper for acf.hooks.doAction
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	n/a
   *  @return	this
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.currentAction = function () {
    for (var k in actionHistory) {
      if (actionHistory[k]) {
        return k;
      }
    }
<<<<<<< HEAD

    return false;
  };
=======
    return false;
  };

>>>>>>> update
  /**
   *  addFilter
   *
   *  Wrapper for acf.hooks.addFilter
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	n/a
   *  @return	this
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.addFilter = function (action) {
    //action = prefixAction(action);
    acf.hooks.addFilter.apply(this, arguments);
    return this;
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  removeFilter
   *
   *  Wrapper for acf.hooks.removeFilter
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	n/a
   *  @return	this
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.removeFilter = function (action) {
    //action = prefixAction(action);
    acf.hooks.removeFilter.apply(this, arguments);
    return this;
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  applyFilters
   *
   *  Wrapper for acf.hooks.applyFilters
   *
   *  @date	14/12/17
   *  @since	5.6.5
   *
   *  @param	n/a
   *  @return	this
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.applyFilters = function (action) {
    //action = prefixAction(action);
    return acf.hooks.applyFilters.apply(this, arguments);
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  getArgs
   *
   *  description
   *
   *  @date	15/12/17
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

  acf.arrayArgs = function (args) {
    return Array.prototype.slice.call(args);
  };
=======
  acf.arrayArgs = function (args) {
    return Array.prototype.slice.call(args);
  };

>>>>>>> update
  /**
   *  extendArgs
   *
   *  description
   *
   *  @date	15/12/17
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

  /*
  acf.extendArgs = function( ){
  	var args = Array.prototype.slice.call( arguments );
  	var realArgs = args.shift();
  		
  	Array.prototype.push.call(arguments, 'bar')
  	return Array.prototype.push.apply( args, arguments );
  };
  */
<<<<<<< HEAD
  // Preferences
  // - use try/catch to avoid JS error if cookies are disabled on front-end form


=======

  // Preferences
  // - use try/catch to avoid JS error if cookies are disabled on front-end form
>>>>>>> update
  try {
    var preferences = JSON.parse(localStorage.getItem('acf')) || {};
  } catch (e) {
    var preferences = {};
  }
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  getPreferenceName
   *
   *  Gets the true preference name.
   *  Converts "this.thing" to "thing-123" if editing post 123.
   *
   *  @date	11/11/17
   *  @since	5.6.5
   *
   *  @param	string name
   *  @return	string
   */

<<<<<<< HEAD

=======
>>>>>>> update
  var getPreferenceName = function (name) {
    if (name.substr(0, 5) === 'this.') {
      name = name.substr(5) + '-' + acf.get('post_id');
    }
<<<<<<< HEAD

    return name;
  };
=======
    return name;
  };

>>>>>>> update
  /**
   *  acf.getPreference
   *
   *  Gets a preference setting or null if not set.
   *
   *  @date	11/11/17
   *  @since	5.6.5
   *
   *  @param	string name
   *  @return	mixed
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.getPreference = function (name) {
    name = getPreferenceName(name);
    return preferences[name] || null;
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  acf.setPreference
   *
   *  Sets a preference setting.
   *
   *  @date	11/11/17
   *  @since	5.6.5
   *
   *  @param	string name
   *  @param	mixed value
   *  @return	n/a
   */

<<<<<<< HEAD

  acf.setPreference = function (name, value) {
    name = getPreferenceName(name);

=======
  acf.setPreference = function (name, value) {
    name = getPreferenceName(name);
>>>>>>> update
    if (value === null) {
      delete preferences[name];
    } else {
      preferences[name] = value;
    }
<<<<<<< HEAD

    localStorage.setItem('acf', JSON.stringify(preferences));
  };
=======
    localStorage.setItem('acf', JSON.stringify(preferences));
  };

>>>>>>> update
  /**
   *  acf.removePreference
   *
   *  Removes a preference setting.
   *
   *  @date	11/11/17
   *  @since	5.6.5
   *
   *  @param	string name
   *  @return	n/a
   */

<<<<<<< HEAD

  acf.removePreference = function (name) {
    acf.setPreference(name, null);
  };
=======
  acf.removePreference = function (name) {
    acf.setPreference(name, null);
  };

>>>>>>> update
  /**
   *  remove
   *
   *  Removes an element with fade effect
   *
   *  @date	1/1/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.remove = function (props) {
    // allow jQuery
    if (props instanceof jQuery) {
      props = {
        target: props
      };
<<<<<<< HEAD
    } // defaults


=======
    }

    // defaults
>>>>>>> update
    props = acf.parseArgs(props, {
      target: false,
      endHeight: 0,
      complete: function () {}
<<<<<<< HEAD
    }); // action

    acf.doAction('remove', props.target); // tr

    if (props.target.is('tr')) {
      removeTr(props); // div
=======
    });

    // action
    acf.doAction('remove', props.target);

    // tr
    if (props.target.is('tr')) {
      removeTr(props);

      // div
>>>>>>> update
    } else {
      removeDiv(props);
    }
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  removeDiv
   *
   *  description
   *
   *  @date	16/2/18
   *  @since	5.6.9
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

=======
>>>>>>> update
  var removeDiv = function (props) {
    // vars
    var $el = props.target;
    var height = $el.height();
    var width = $el.width();
    var margin = $el.css('margin');
    var outerHeight = $el.outerHeight(true);
    var style = $el.attr('style') + ''; // needed to copy
<<<<<<< HEAD
    // wrap

    $el.wrap('<div class="acf-temp-remove" style="height:' + outerHeight + 'px"></div>');
    var $wrap = $el.parent(); // set pos

=======

    // wrap
    $el.wrap('<div class="acf-temp-remove" style="height:' + outerHeight + 'px"></div>');
    var $wrap = $el.parent();

    // set pos
>>>>>>> update
    $el.css({
      height: height,
      width: width,
      margin: margin,
      position: 'absolute'
<<<<<<< HEAD
    }); // fade wrap

=======
    });

    // fade wrap
>>>>>>> update
    setTimeout(function () {
      $wrap.css({
        opacity: 0,
        height: props.endHeight
      });
<<<<<<< HEAD
    }, 50); // remove

=======
    }, 50);

    // remove
>>>>>>> update
    setTimeout(function () {
      $el.attr('style', style);
      $wrap.remove();
      props.complete();
    }, 301);
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  removeTr
   *
   *  description
   *
   *  @date	16/2/18
   *  @since	5.6.9
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

=======
>>>>>>> update
  var removeTr = function (props) {
    // vars
    var $tr = props.target;
    var height = $tr.height();
<<<<<<< HEAD
    var children = $tr.children().length; // create dummy td

    var $td = $('<td class="acf-temp-remove" style="padding:0; height:' + height + 'px" colspan="' + children + '"></td>'); // fade away tr

    $tr.addClass('acf-remove-element'); // update HTML after fade animation

    setTimeout(function () {
      $tr.html($td);
    }, 251); // allow .acf-temp-remove to exist before changing CSS

    setTimeout(function () {
      // remove class
      $tr.removeClass('acf-remove-element'); // collapse

      $td.css({
        height: props.endHeight
      });
    }, 300); // remove

=======
    var children = $tr.children().length;

    // create dummy td
    var $td = $('<td class="acf-temp-remove" style="padding:0; height:' + height + 'px" colspan="' + children + '"></td>');

    // fade away tr
    $tr.addClass('acf-remove-element');

    // update HTML after fade animation
    setTimeout(function () {
      $tr.html($td);
    }, 251);

    // allow .acf-temp-remove to exist before changing CSS
    setTimeout(function () {
      // remove class
      $tr.removeClass('acf-remove-element');

      // collapse
      $td.css({
        height: props.endHeight
      });
    }, 300);

    // remove
>>>>>>> update
    setTimeout(function () {
      $tr.remove();
      props.complete();
    }, 451);
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  duplicate
   *
   *  description
   *
   *  @date	3/1/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.duplicate = function (args) {
    // allow jQuery
    if (args instanceof jQuery) {
      args = {
        target: args
      };
<<<<<<< HEAD
    } // defaults


=======
    }

    // defaults
>>>>>>> update
    args = acf.parseArgs(args, {
      target: false,
      search: '',
      replace: '',
      rename: true,
      before: function ($el) {},
      after: function ($el, $el2) {},
      append: function ($el, $el2) {
        $el.after($el2);
      }
<<<<<<< HEAD
    }); // compatibility

    args.target = args.target || args.$el; // vars

    var $el = args.target; // search

    args.search = args.search || $el.attr('data-id');
    args.replace = args.replace || acf.uniqid(); // before
    // - allow acf to modify DOM
    // - fixes bug where select field option is not selected

    args.before($el);
    acf.doAction('before_duplicate', $el); // clone

    var $el2 = $el.clone(); // rename

=======
    });

    // compatibility
    args.target = args.target || args.$el;

    // vars
    var $el = args.target;

    // search
    args.search = args.search || $el.attr('data-id');
    args.replace = args.replace || acf.uniqid();

    // before
    // - allow acf to modify DOM
    // - fixes bug where select field option is not selected
    args.before($el);
    acf.doAction('before_duplicate', $el);

    // clone
    var $el2 = $el.clone();

    // rename
>>>>>>> update
    if (args.rename) {
      acf.rename({
        target: $el2,
        search: args.search,
        replace: args.replace,
        replacer: typeof args.rename === 'function' ? args.rename : null
      });
<<<<<<< HEAD
    } // remove classes


    $el2.removeClass('acf-clone');
    $el2.find('.ui-sortable').removeClass('ui-sortable'); // after
    // - allow acf to modify DOM

    args.after($el, $el2);
    acf.doAction('after_duplicate', $el, $el2); // append

    args.append($el, $el2);
=======
    }

    // remove classes
    $el2.removeClass('acf-clone');
    $el2.find('.ui-sortable').removeClass('ui-sortable');

    // remove any initialised select2s prevent the duplicated object stealing the previous select2.
    $el2.find('[data-select2-id]').removeAttr('data-select2-id');
    $el2.find('.select2').remove();

    // subfield select2 renames happen after init and contain a duplicated ID. force change those IDs to prevent this.
    $el2.find('.acf-is-subfields select[data-ui="1"]').each(function () {
      $(this).prop('id', $(this).prop('id').replace('acf_fields', acf.uniqid('duplicated_') + '_acf_fields'));
    });

    // remove tab wrapper to ensure proper init
    $el2.find('.acf-field-settings > .acf-tab-wrap').remove();

    // after
    // - allow acf to modify DOM
    args.after($el, $el2);
    acf.doAction('after_duplicate', $el, $el2);

    // append
    args.append($el, $el2);

>>>>>>> update
    /**
     * Fires after an element has been duplicated and appended to the DOM.
     *
     * @date	30/10/19
     * @since	5.8.7
     *
     * @param	jQuery $el The original element.
     * @param	jQuery $el2 The duplicated element.
     */
<<<<<<< HEAD

    acf.doAction('duplicate', $el, $el2); // append

    acf.doAction('append', $el2); // return

    return $el2;
  };
=======
    acf.doAction('duplicate', $el, $el2);

    // append
    acf.doAction('append', $el2);

    // return
    return $el2;
  };

>>>>>>> update
  /**
   *  rename
   *
   *  description
   *
   *  @date	7/1/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.rename = function (args) {
    // Allow jQuery param.
    if (args instanceof jQuery) {
      args = {
        target: args
      };
<<<<<<< HEAD
    } // Apply default args.


=======
    }

    // Apply default args.
>>>>>>> update
    args = acf.parseArgs(args, {
      target: false,
      destructive: false,
      search: '',
      replace: '',
      replacer: null
<<<<<<< HEAD
    }); // Extract args.

    var $el = args.target; // Provide backup for empty args.

    if (!args.search) {
      args.search = $el.attr('data-id');
    }

    if (!args.replace) {
      args.replace = acf.uniqid('acf');
    }

=======
    });

    // Extract args.
    var $el = args.target;

    // Provide backup for empty args.
    if (!args.search) {
      args.search = $el.attr('data-id');
    }
    if (!args.replace) {
      args.replace = acf.uniqid('acf');
    }
>>>>>>> update
    if (!args.replacer) {
      args.replacer = function (name, value, search, replace) {
        return value.replace(search, replace);
      };
<<<<<<< HEAD
    } // Callback function for jQuery replacing.


=======
    }

    // Callback function for jQuery replacing.
>>>>>>> update
    var withReplacer = function (name) {
      return function (i, value) {
        return args.replacer(name, value, args.search, args.replace);
      };
<<<<<<< HEAD
    }; // Destructive Replace.


    if (args.destructive) {
      var html = acf.strReplace(args.search, args.replace, $el.outerHTML());
      $el.replaceWith(html); // Standard Replace.
=======
    };

    // Destructive Replace.
    if (args.destructive) {
      var html = acf.strReplace(args.search, args.replace, $el.outerHTML());
      $el.replaceWith(html);

      // Standard Replace.
>>>>>>> update
    } else {
      $el.attr('data-id', args.replace);
      $el.find('[id*="' + args.search + '"]').attr('id', withReplacer('id'));
      $el.find('[for*="' + args.search + '"]').attr('for', withReplacer('for'));
      $el.find('[name*="' + args.search + '"]').attr('name', withReplacer('name'));
<<<<<<< HEAD
    } // return


    return $el;
  };
=======
    }

    // return
    return $el;
  };

>>>>>>> update
  /**
   *  acf.prepareForAjax
   *
   *  description
   *
   *  @date	4/1/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

  acf.prepareForAjax = function (data) {
    // required
    data.nonce = acf.get('nonce');
    data.post_id = acf.get('post_id'); // language

    if (acf.has('language')) {
      data.lang = acf.get('language');
    } // filter for 3rd party customization


    data = acf.applyFilters('prepare_for_ajax', data); // return

    return data;
  };
=======
  acf.prepareForAjax = function (data) {
    // required
    data.nonce = acf.get('nonce');
    data.post_id = acf.get('post_id');

    // language
    if (acf.has('language')) {
      data.lang = acf.get('language');
    }

    // filter for 3rd party customization
    data = acf.applyFilters('prepare_for_ajax', data);

    // return
    return data;
  };

>>>>>>> update
  /**
   *  acf.startButtonLoading
   *
   *  description
   *
   *  @date	5/1/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.startButtonLoading = function ($el) {
    $el.prop('disabled', true);
    $el.after(' <i class="acf-loading"></i>');
  };
<<<<<<< HEAD

=======
>>>>>>> update
  acf.stopButtonLoading = function ($el) {
    $el.prop('disabled', false);
    $el.next('.acf-loading').remove();
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  acf.showLoading
   *
   *  description
   *
   *  @date	12/1/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

  acf.showLoading = function ($el) {
    $el.append('<div class="acf-loading-overlay"><i class="acf-loading"></i></div>');
  };

  acf.hideLoading = function ($el) {
    $el.children('.acf-loading-overlay').remove();
  };
=======
  acf.showLoading = function ($el) {
    $el.append('<div class="acf-loading-overlay"><i class="acf-loading"></i></div>');
  };
  acf.hideLoading = function ($el) {
    $el.children('.acf-loading-overlay').remove();
  };

>>>>>>> update
  /**
   *  acf.updateUserSetting
   *
   *  description
   *
   *  @date	5/1/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.updateUserSetting = function (name, value) {
    var ajaxData = {
      action: 'acf/ajax/user_setting',
      name: name,
      value: value
    };
    $.ajax({
      url: acf.get('ajaxurl'),
      data: acf.prepareForAjax(ajaxData),
      type: 'post',
      dataType: 'html'
    });
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  acf.val
   *
   *  description
   *
   *  @date	8/1/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

  acf.val = function ($input, value, silent) {
    // vars
    var prevValue = $input.val(); // bail if no change

    if (value === prevValue) {
      return false;
    } // update value


    $input.val(value); // prevent select elements displaying blank value if option doesn't exist

    if ($input.is('select') && $input.val() === null) {
      $input.val(prevValue);
      return false;
    } // update with trigger


    if (silent !== true) {
      $input.trigger('change');
    } // return


    return true;
  };
=======
  acf.val = function ($input, value, silent) {
    // vars
    var prevValue = $input.val();

    // bail if no change
    if (value === prevValue) {
      return false;
    }

    // update value
    $input.val(value);

    // prevent select elements displaying blank value if option doesn't exist
    if ($input.is('select') && $input.val() === null) {
      $input.val(prevValue);
      return false;
    }

    // update with trigger
    if (silent !== true) {
      $input.trigger('change');
    }

    // return
    return true;
  };

>>>>>>> update
  /**
   *  acf.show
   *
   *  description
   *
   *  @date	9/2/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.show = function ($el, lockKey) {
    // unlock
    if (lockKey) {
      acf.unlock($el, 'hidden', lockKey);
<<<<<<< HEAD
    } // bail early if $el is still locked


    if (acf.isLocked($el, 'hidden')) {
      //console.log( 'still locked', getLocks( $el, 'hidden' ));
      return false;
    } // $el is hidden, remove class and return true due to change in visibility


    if ($el.hasClass('acf-hidden')) {
      $el.removeClass('acf-hidden');
      return true; // $el is visible, return false due to no change in visibility
=======
    }

    // bail early if $el is still locked
    if (acf.isLocked($el, 'hidden')) {
      //console.log( 'still locked', getLocks( $el, 'hidden' ));
      return false;
    }

    // $el is hidden, remove class and return true due to change in visibility
    if ($el.hasClass('acf-hidden')) {
      $el.removeClass('acf-hidden');
      return true;

      // $el is visible, return false due to no change in visibility
>>>>>>> update
    } else {
      return false;
    }
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  acf.hide
   *
   *  description
   *
   *  @date	9/2/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.hide = function ($el, lockKey) {
    // lock
    if (lockKey) {
      acf.lock($el, 'hidden', lockKey);
<<<<<<< HEAD
    } // $el is hidden, return false due to no change in visibility


    if ($el.hasClass('acf-hidden')) {
      return false; // $el is visible, add class and return true due to change in visibility
=======
    }

    // $el is hidden, return false due to no change in visibility
    if ($el.hasClass('acf-hidden')) {
      return false;

      // $el is visible, add class and return true due to change in visibility
>>>>>>> update
    } else {
      $el.addClass('acf-hidden');
      return true;
    }
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  acf.isHidden
   *
   *  description
   *
   *  @date	9/2/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

  acf.isHidden = function ($el) {
    return $el.hasClass('acf-hidden');
  };
=======
  acf.isHidden = function ($el) {
    return $el.hasClass('acf-hidden');
  };

>>>>>>> update
  /**
   *  acf.isVisible
   *
   *  description
   *
   *  @date	9/2/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

  acf.isVisible = function ($el) {
    return !acf.isHidden($el);
  };
=======
  acf.isVisible = function ($el) {
    return !acf.isHidden($el);
  };

>>>>>>> update
  /**
   *  enable
   *
   *  description
   *
   *  @date	12/3/18
   *  @since	5.6.9
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

=======
>>>>>>> update
  var enable = function ($el, lockKey) {
    // check class. Allow .acf-disabled to overrule all JS
    if ($el.hasClass('acf-disabled')) {
      return false;
<<<<<<< HEAD
    } // unlock


    if (lockKey) {
      acf.unlock($el, 'disabled', lockKey);
    } // bail early if $el is still locked


    if (acf.isLocked($el, 'disabled')) {
      return false;
    } // $el is disabled, remove prop and return true due to change


    if ($el.prop('disabled')) {
      $el.prop('disabled', false);
      return true; // $el is enabled, return false due to no change
=======
    }

    // unlock
    if (lockKey) {
      acf.unlock($el, 'disabled', lockKey);
    }

    // bail early if $el is still locked
    if (acf.isLocked($el, 'disabled')) {
      return false;
    }

    // $el is disabled, remove prop and return true due to change
    if ($el.prop('disabled')) {
      $el.prop('disabled', false);
      return true;

      // $el is enabled, return false due to no change
>>>>>>> update
    } else {
      return false;
    }
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  acf.enable
   *
   *  description
   *
   *  @date	9/2/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.enable = function ($el, lockKey) {
    // enable single input
    if ($el.attr('name')) {
      return enable($el, lockKey);
<<<<<<< HEAD
    } // find and enable child inputs
    // return true if any inputs have changed


    var results = false;
    $el.find('[name]').each(function () {
      var result = enable($(this), lockKey);

=======
    }

    // find and enable child inputs
    // return true if any inputs have changed
    var results = false;
    $el.find('[name]').each(function () {
      var result = enable($(this), lockKey);
>>>>>>> update
      if (result) {
        results = true;
      }
    });
    return results;
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  disable
   *
   *  description
   *
   *  @date	12/3/18
   *  @since	5.6.9
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

=======
>>>>>>> update
  var disable = function ($el, lockKey) {
    // lock
    if (lockKey) {
      acf.lock($el, 'disabled', lockKey);
<<<<<<< HEAD
    } // $el is disabled, return false due to no change


    if ($el.prop('disabled')) {
      return false; // $el is enabled, add prop and return true due to change
=======
    }

    // $el is disabled, return false due to no change
    if ($el.prop('disabled')) {
      return false;

      // $el is enabled, add prop and return true due to change
>>>>>>> update
    } else {
      $el.prop('disabled', true);
      return true;
    }
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  acf.disable
   *
   *  description
   *
   *  @date	9/2/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

=======
>>>>>>> update
  acf.disable = function ($el, lockKey) {
    // disable single input
    if ($el.attr('name')) {
      return disable($el, lockKey);
<<<<<<< HEAD
    } // find and enable child inputs
    // return true if any inputs have changed


    var results = false;
    $el.find('[name]').each(function () {
      var result = disable($(this), lockKey);

=======
    }

    // find and enable child inputs
    // return true if any inputs have changed
    var results = false;
    $el.find('[name]').each(function () {
      var result = disable($(this), lockKey);
>>>>>>> update
      if (result) {
        results = true;
      }
    });
    return results;
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  acf.isset
   *
   *  description
   *
   *  @date	10/1/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

  acf.isset = function (obj
  /*, level1, level2, ... */
  ) {
=======
  acf.isset = function (obj /*, level1, level2, ... */) {
>>>>>>> update
    for (var i = 1; i < arguments.length; i++) {
      if (!obj || !obj.hasOwnProperty(arguments[i])) {
        return false;
      }
<<<<<<< HEAD

      obj = obj[arguments[i]];
    }

    return true;
  };
=======
      obj = obj[arguments[i]];
    }
    return true;
  };

>>>>>>> update
  /**
   *  acf.isget
   *
   *  description
   *
   *  @date	10/1/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

  acf.isget = function (obj
  /*, level1, level2, ... */
  ) {
=======
  acf.isget = function (obj /*, level1, level2, ... */) {
>>>>>>> update
    for (var i = 1; i < arguments.length; i++) {
      if (!obj || !obj.hasOwnProperty(arguments[i])) {
        return null;
      }
<<<<<<< HEAD

      obj = obj[arguments[i]];
    }

    return obj;
  };
=======
      obj = obj[arguments[i]];
    }
    return obj;
  };

>>>>>>> update
  /**
   *  acf.getFileInputData
   *
   *  description
   *
   *  @date	10/1/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

  acf.getFileInputData = function ($input, callback) {
    // vars
    var value = $input.val(); // bail early if no value

    if (!value) {
      return false;
    } // data


    var data = {
      url: value
    }; // modern browsers

    var file = $input[0].files.length ? acf.isget($input[0].files, 0) : false;

    if (file) {
      // update data
      data.size = file.size;
      data.type = file.type; // image

=======
  acf.getFileInputData = function ($input, callback) {
    // vars
    var value = $input.val();

    // bail early if no value
    if (!value) {
      return false;
    }

    // data
    var data = {
      url: value
    };

    // modern browsers
    var file = $input[0].files.length ? acf.isget($input[0].files, 0) : false;
    if (file) {
      // update data
      data.size = file.size;
      data.type = file.type;

      // image
>>>>>>> update
      if (file.type.indexOf('image') > -1) {
        // vars
        var windowURL = window.URL || window.webkitURL;
        var img = new Image();
<<<<<<< HEAD

=======
>>>>>>> update
        img.onload = function () {
          // update
          data.width = this.width;
          data.height = this.height;
          callback(data);
        };
<<<<<<< HEAD

=======
>>>>>>> update
        img.src = windowURL.createObjectURL(file);
      } else {
        callback(data);
      }
    } else {
      callback(data);
    }
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  acf.isAjaxSuccess
   *
   *  description
   *
   *  @date	18/1/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

  acf.isAjaxSuccess = function (json) {
    return json && json.success;
  };
=======
  acf.isAjaxSuccess = function (json) {
    return json && json.success;
  };

>>>>>>> update
  /**
   *  acf.getAjaxMessage
   *
   *  description
   *
   *  @date	18/1/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

  acf.getAjaxMessage = function (json) {
    return acf.isget(json, 'data', 'message');
  };
=======
  acf.getAjaxMessage = function (json) {
    return acf.isget(json, 'data', 'message');
  };

>>>>>>> update
  /**
   *  acf.getAjaxError
   *
   *  description
   *
   *  @date	18/1/18
   *  @since	5.6.5
   *
   *  @param	type $var Description. Default.
   *  @return	type Description.
   */

<<<<<<< HEAD

  acf.getAjaxError = function (json) {
    return acf.isget(json, 'data', 'error');
  };
=======
  acf.getAjaxError = function (json) {
    return acf.isget(json, 'data', 'error');
  };

>>>>>>> update
  /**
   * Returns the error message from an XHR object.
   *
   * @date	17/3/20
   * @since	5.8.9
   *
   * @param	object xhr The XHR object.
   * @return	(string)
   */
<<<<<<< HEAD


  acf.getXhrError = function (xhr) {
    if (xhr.responseJSON && xhr.responseJSON.message) {
      return xhr.responseJSON.message;
    } else if (xhr.statusText) {
      return xhr.statusText;
    }

    return '';
  };
=======
  acf.getXhrError = function (xhr) {
    if (xhr.responseJSON) {
      // Responses via `return new WP_Error();`
      if (xhr.responseJSON.message) {
        return xhr.responseJSON.message;
      }

      // Responses via `wp_send_json_error();`.
      if (xhr.responseJSON.data && xhr.responseJSON.data.error) {
        return xhr.responseJSON.data.error;
      }
    } else if (xhr.statusText) {
      return xhr.statusText;
    }
    return '';
  };

>>>>>>> update
  /**
   *  acf.renderSelect
   *
   *  Renders the innter html for a select field.
   *
   *  @date	19/2/18
   *  @since	5.6.9
   *
   *  @param	jQuery $select The select element.
   *  @param	array choices An array of choices.
   *  @return	void
   */

<<<<<<< HEAD

  acf.renderSelect = function ($select, choices) {
    // vars
    var value = $select.val();
    var values = []; // callback

    var crawl = function (items) {
      // vars
      var itemsHtml = ''; // loop

      items.map(function (item) {
        // vars
        var text = item.text || item.label || '';
        var id = item.id || item.value || ''; // append

        values.push(id); //  optgroup

        if (item.children) {
          itemsHtml += '<optgroup label="' + acf.escAttr(text) + '">' + crawl(item.children) + '</optgroup>'; // option
        } else {
          itemsHtml += '<option value="' + acf.escAttr(id) + '"' + (item.disabled ? ' disabled="disabled"' : '') + '>' + acf.strEscape(text) + '</option>';
        }
      }); // return

      return itemsHtml;
    }; // update HTML


    $select.html(crawl(choices)); // update value

    if (values.indexOf(value) > -1) {
      $select.val(value);
    } // return selected value


    return $select.val();
  };
=======
  acf.renderSelect = function ($select, choices) {
    // vars
    var value = $select.val();
    var values = [];

    // callback
    var crawl = function (items) {
      // vars
      var itemsHtml = '';

      // loop
      items.map(function (item) {
        // vars
        var text = item.text || item.label || '';
        var id = item.id || item.value || '';

        // append
        values.push(id);

        //  optgroup
        if (item.children) {
          itemsHtml += '<optgroup label="' + acf.escAttr(text) + '">' + crawl(item.children) + '</optgroup>';

          // option
        } else {
          itemsHtml += '<option value="' + acf.escAttr(id) + '"' + (item.disabled ? ' disabled="disabled"' : '') + '>' + acf.strEscape(text) + '</option>';
        }
      });

      // return
      return itemsHtml;
    };

    // update HTML
    $select.html(crawl(choices));

    // update value
    if (values.indexOf(value) > -1) {
      $select.val(value);
    }

    // return selected value
    return $select.val();
  };

>>>>>>> update
  /**
   *  acf.lock
   *
   *  Creates a "lock" on an element for a given type and key
   *
   *  @date	22/2/18
   *  @since	5.6.9
   *
   *  @param	jQuery $el The element to lock.
   *  @param	string type The type of lock such as "condition" or "visibility".
   *  @param	string key The key that will be used to unlock.
   *  @return	void
   */

<<<<<<< HEAD

  var getLocks = function ($el, type) {
    return $el.data('acf-lock-' + type) || [];
  };

  var setLocks = function ($el, type, locks) {
    $el.data('acf-lock-' + type, locks);
  };

  acf.lock = function ($el, type, key) {
    var locks = getLocks($el, type);
    var i = locks.indexOf(key);

=======
  var getLocks = function ($el, type) {
    return $el.data('acf-lock-' + type) || [];
  };
  var setLocks = function ($el, type, locks) {
    $el.data('acf-lock-' + type, locks);
  };
  acf.lock = function ($el, type, key) {
    var locks = getLocks($el, type);
    var i = locks.indexOf(key);
>>>>>>> update
    if (i < 0) {
      locks.push(key);
      setLocks($el, type, locks);
    }
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   *  acf.unlock
   *
   *  Unlocks a "lock" on an element for a given type and key
   *
   *  @date	22/2/18
   *  @since	5.6.9
   *
   *  @param	jQuery $el The element to lock.
   *  @param	string type The type of lock such as "condition" or "visibility".
   *  @param	string key The key that will be used to unlock.
   *  @return	void
   */

<<<<<<< HEAD

  acf.unlock = function ($el, type, key) {
    var locks = getLocks($el, type);
    var i = locks.indexOf(key);

    if (i > -1) {
      locks.splice(i, 1);
      setLocks($el, type, locks);
    } // return true if is unlocked (no locks)


    return locks.length === 0;
  };
=======
  acf.unlock = function ($el, type, key) {
    var locks = getLocks($el, type);
    var i = locks.indexOf(key);
    if (i > -1) {
      locks.splice(i, 1);
      setLocks($el, type, locks);
    }

    // return true if is unlocked (no locks)
    return locks.length === 0;
  };

>>>>>>> update
  /**
   *  acf.isLocked
   *
   *  Returns true if a lock exists for a given type
   *
   *  @date	22/2/18
   *  @since	5.6.9
   *
   *  @param	jQuery $el The element to lock.
   *  @param	string type The type of lock such as "condition" or "visibility".
   *  @return	void
   */

<<<<<<< HEAD

  acf.isLocked = function ($el, type) {
    return getLocks($el, type).length > 0;
  };
=======
  acf.isLocked = function ($el, type) {
    return getLocks($el, type).length > 0;
  };

>>>>>>> update
  /**
   *  acf.isGutenberg
   *
   *  Returns true if the Gutenberg editor is being used.
   *
<<<<<<< HEAD
   *  @date	14/11/18
   *  @since	5.8.0
   *
   *  @param	vois
   *  @return	bool
   */


  acf.isGutenberg = function () {
    return !!(window.wp && wp.data && wp.data.select && wp.data.select('core/editor'));
  };
=======
   *  @since	5.8.0
   *
   *  @return	bool
   */
  acf.isGutenberg = function () {
    return !!(window.wp && wp.data && wp.data.select && wp.data.select('core/editor'));
  };

  /**
   *  acf.isGutenbergPostEditor
   *
   *  Returns true if the Gutenberg post editor is being used.
   *
   *  @since	6.2.2
   *
   *  @return	bool
   */
  acf.isGutenbergPostEditor = function () {
    return !!(window.wp && wp.data && wp.data.select && wp.data.select('core/edit-post'));
  };

>>>>>>> update
  /**
   *  acf.objectToArray
   *
   *  Returns an array of items from the given object.
   *
   *  @date	20/11/18
   *  @since	5.8.0
   *
   *  @param	object obj The object of items.
   *  @return	array
   */
<<<<<<< HEAD


=======
>>>>>>> update
  acf.objectToArray = function (obj) {
    return Object.keys(obj).map(function (key) {
      return obj[key];
    });
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   * acf.debounce
   *
   * Returns a debounced version of the passed function which will postpone its execution until after `wait` milliseconds have elapsed since the last time it was invoked.
   *
   * @date	28/8/19
   * @since	5.8.1
   *
   * @param	function callback The callback function.
   * @return	int wait The number of milliseconds to wait.
   */
<<<<<<< HEAD


=======
>>>>>>> update
  acf.debounce = function (callback, wait) {
    var timeout;
    return function () {
      var context = this;
      var args = arguments;
<<<<<<< HEAD

      var later = function () {
        callback.apply(context, args);
      };

=======
      var later = function () {
        callback.apply(context, args);
      };
>>>>>>> update
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
    };
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   * acf.throttle
   *
   * Returns a throttled version of the passed function which will allow only one execution per `limit` time period.
   *
   * @date	28/8/19
   * @since	5.8.1
   *
   * @param	function callback The callback function.
   * @return	int wait The number of milliseconds to wait.
   */
<<<<<<< HEAD


=======
>>>>>>> update
  acf.throttle = function (callback, limit) {
    var busy = false;
    return function () {
      if (busy) return;
      busy = true;
      setTimeout(function () {
        busy = false;
      }, limit);
      callback.apply(this, arguments);
    };
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   * acf.isInView
   *
   * Returns true if the given element is in view.
   *
   * @date	29/8/19
   * @since	5.8.1
   *
   * @param	elem el The dom element to inspect.
   * @return	bool
   */
<<<<<<< HEAD


=======
>>>>>>> update
  acf.isInView = function (el) {
    if (el instanceof jQuery) {
      el = el[0];
    }
<<<<<<< HEAD

    var rect = el.getBoundingClientRect();
    return rect.top !== rect.bottom && rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
  };
=======
    var rect = el.getBoundingClientRect();
    return rect.top !== rect.bottom && rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
  };

>>>>>>> update
  /**
   * acf.onceInView
   *
   * Watches for a dom element to become visible in the browser and then excecutes the passed callback.
   *
   * @date	28/8/19
   * @since	5.8.1
   *
   * @param	dom el The dom element to inspect.
   * @param	function callback The callback function.
   */
<<<<<<< HEAD


  acf.onceInView = function () {
    // Define list.
    var items = [];
    var id = 0; // Define check function.

=======
  acf.onceInView = function () {
    // Define list.
    var items = [];
    var id = 0;

    // Define check function.
>>>>>>> update
    var check = function () {
      items.forEach(function (item) {
        if (acf.isInView(item.el)) {
          item.callback.apply(this);
          pop(item.id);
        }
      });
<<<<<<< HEAD
    }; // And create a debounced version.


    var debounced = acf.debounce(check, 300); // Define add function.

=======
    };

    // And create a debounced version.
    var debounced = acf.debounce(check, 300);

    // Define add function.
>>>>>>> update
    var push = function (el, callback) {
      // Add event listener.
      if (!items.length) {
        $(window).on('scroll resize', debounced).on('acfrefresh orientationchange', check);
<<<<<<< HEAD
      } // Append to list.


=======
      }

      // Append to list.
>>>>>>> update
      items.push({
        id: id++,
        el: el,
        callback: callback
      });
<<<<<<< HEAD
    }; // Define remove function.


=======
    };

    // Define remove function.
>>>>>>> update
    var pop = function (id) {
      // Remove from list.
      items = items.filter(function (item) {
        return item.id !== id;
<<<<<<< HEAD
      }); // Clean up listener.

      if (!items.length) {
        $(window).off('scroll resize', debounced).off('acfrefresh orientationchange', check);
      }
    }; // Define returned function.


    return function (el, callback) {
      // Allow jQuery object.
      if (el instanceof jQuery) el = el[0]; // Execute callback if already in view or add to watch list.

=======
      });

      // Clean up listener.
      if (!items.length) {
        $(window).off('scroll resize', debounced).off('acfrefresh orientationchange', check);
      }
    };

    // Define returned function.
    return function (el, callback) {
      // Allow jQuery object.
      if (el instanceof jQuery) el = el[0];

      // Execute callback if already in view or add to watch list.
>>>>>>> update
      if (acf.isInView(el)) {
        callback.apply(this);
      } else {
        push(el, callback);
      }
    };
  }();
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   * acf.once
   *
   * Creates a function that is restricted to invoking `func` once.
   *
   * @date	2/9/19
   * @since	5.8.1
   *
   * @param	function func The function to restrict.
   * @return	function
   */
<<<<<<< HEAD


=======
>>>>>>> update
  acf.once = function (func) {
    var i = 0;
    return function () {
      if (i++ > 0) {
        return func = undefined;
      }
<<<<<<< HEAD

      return func.apply(this, arguments);
    };
  };
=======
      return func.apply(this, arguments);
    };
  };

>>>>>>> update
  /**
   * Focuses attention to a specific element.
   *
   * @date	05/05/2020
   * @since	5.9.0
   *
   * @param	jQuery $el The jQuery element to focus.
   * @return	void
   */
<<<<<<< HEAD


  acf.focusAttention = function ($el) {
    var wait = 1000; // Apply class to focus attention.

    $el.addClass('acf-attention -focused'); // Scroll to element if needed.

    var scrollTime = 500;

=======
  acf.focusAttention = function ($el) {
    var wait = 1000;

    // Apply class to focus attention.
    $el.addClass('acf-attention -focused');

    // Scroll to element if needed.
    var scrollTime = 500;
>>>>>>> update
    if (!acf.isInView($el)) {
      $('body, html').animate({
        scrollTop: $el.offset().top - $(window).height() / 2
      }, scrollTime);
      wait += scrollTime;
<<<<<<< HEAD
    } // Remove class after $wait amount of time.


=======
    }

    // Remove class after $wait amount of time.
>>>>>>> update
    var fadeTime = 250;
    setTimeout(function () {
      $el.removeClass('-focused');
      setTimeout(function () {
        $el.removeClass('acf-attention');
      }, fadeTime);
    }, wait);
  };
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   * Description
   *
   * @date	05/05/2020
   * @since	5.9.0
   *
   * @param	type Var Description.
   * @return	type Description.
   */
<<<<<<< HEAD


=======
>>>>>>> update
  acf.onFocus = function ($el, callback) {
    // Only run once per element.
    // if( $el.data('acf.onFocus') ) {
    // 	return false;
    // }
<<<<<<< HEAD
    // Vars.
    var ignoreBlur = false;
    var focus = false; // Functions.

=======

    // Vars.
    var ignoreBlur = false;
    var focus = false;

    // Functions.
>>>>>>> update
    var onFocus = function () {
      ignoreBlur = true;
      setTimeout(function () {
        ignoreBlur = false;
      }, 1);
      setFocus(true);
    };
<<<<<<< HEAD

=======
>>>>>>> update
    var onBlur = function () {
      if (!ignoreBlur) {
        setFocus(false);
      }
    };
<<<<<<< HEAD

    var addEvents = function () {
      $(document).on('click', onBlur); //$el.on('acfBlur', onBlur);

      $el.on('blur', 'input, select, textarea', onBlur);
    };

    var removeEvents = function () {
      $(document).off('click', onBlur); //$el.off('acfBlur', onBlur);

      $el.off('blur', 'input, select, textarea', onBlur);
    };

=======
    var addEvents = function () {
      $(document).on('click', onBlur);
      //$el.on('acfBlur', onBlur);
      $el.on('blur', 'input, select, textarea', onBlur);
    };
    var removeEvents = function () {
      $(document).off('click', onBlur);
      //$el.off('acfBlur', onBlur);
      $el.off('blur', 'input, select, textarea', onBlur);
    };
>>>>>>> update
    var setFocus = function (value) {
      if (focus === value) {
        return;
      }
<<<<<<< HEAD

=======
>>>>>>> update
      if (value) {
        addEvents();
      } else {
        removeEvents();
      }
<<<<<<< HEAD

      focus = value;
      callback(value);
    }; // Add events and set data.


    $el.on('click', onFocus); //$el.on('acfFocus', onFocus);

    $el.on('focus', 'input, select, textarea', onFocus); //$el.data('acf.onFocus', true);
  };
=======
      focus = value;
      callback(value);
    };

    // Add events and set data.
    $el.on('click', onFocus);
    //$el.on('acfFocus', onFocus);
    $el.on('focus', 'input, select, textarea', onFocus);
    //$el.data('acf.onFocus', true);
  };

  /**
   * Disable form submit buttons
   *
   * @since 6.2.3
   *
   * @param event e
   * @returns void
   */
  acf.disableForm = function (e) {
    // Disable submit button.
    if (e.submitter) e.submitter.classList.add('disabled');
  };

>>>>>>> update
  /*
   *  exists
   *
   *  This function will return true if a jQuery selection exists
   *
   *  @type	function
   *  @date	8/09/2014
   *  @since	5.0.0
   *
   *  @param	n/a
   *  @return	(boolean)
   */

<<<<<<< HEAD

  $.fn.exists = function () {
    return $(this).length > 0;
  };
=======
  $.fn.exists = function () {
    return $(this).length > 0;
  };

>>>>>>> update
  /*
   *  outerHTML
   *
   *  This function will return a string containing the HTML of the selected element
   *
   *  @type	function
   *  @date	19/11/2013
   *  @since	5.0.0
   *
   *  @param	$.fn
   *  @return	(string)
   */

<<<<<<< HEAD

  $.fn.outerHTML = function () {
    return $(this).get(0).outerHTML;
  };
=======
  $.fn.outerHTML = function () {
    return $(this).get(0).outerHTML;
  };

>>>>>>> update
  /*
   *  indexOf
   *
   *  This function will provide compatibility for ie8
   *
   *  @type	function
   *  @date	5/3/17
   *  @since	5.5.10
   *
   *  @param	n/a
   *  @return	n/a
   */

<<<<<<< HEAD

=======
>>>>>>> update
  if (!Array.prototype.indexOf) {
    Array.prototype.indexOf = function (val) {
      return $.inArray(val, this);
    };
  }
<<<<<<< HEAD
=======

>>>>>>> update
  /**
   * Returns true if value is a number or a numeric string.
   *
   * @date	30/11/20
   * @since	5.9.4
   * @link	https://stackoverflow.com/questions/9716468/pure-javascript-a-function-like-jquerys-isnumeric/9716488#9716488
   *
   * @param	mixed n The variable being evaluated.
   * @return	bool.
   */
<<<<<<< HEAD


  acf.isNumeric = function (n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
  };
=======
  acf.isNumeric = function (n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
  };

>>>>>>> update
  /**
   * Triggers a "refresh" action used by various Components to redraw the DOM.
   *
   * @date	26/05/2020
   * @since	5.9.0
   *
   * @param	void
   * @return	void
   */
<<<<<<< HEAD


  acf.refresh = acf.debounce(function () {
    $(window).trigger('acfrefresh');
    acf.doAction('refresh');
  }, 0); // Set up actions from events

=======
  acf.refresh = acf.debounce(function () {
    $(window).trigger('acfrefresh');
    acf.doAction('refresh');
  }, 0);

  // Set up actions from events
>>>>>>> update
  $(document).ready(function () {
    acf.doAction('ready');
  });
  $(window).on('load', function () {
    // Use timeout to ensure action runs after Gutenberg has modified DOM elements during "DOMContentLoaded".
    setTimeout(function () {
      acf.doAction('load');
    });
  });
  $(window).on('beforeunload', function () {
    acf.doAction('unload');
  });
  $(window).on('resize', function () {
    acf.doAction('resize');
  });
  $(document).on('sortstart', function (event, ui) {
    acf.doAction('sortstart', ui.item, ui.placeholder);
  });
  $(document).on('sortstop', function (event, ui) {
    acf.doAction('sortstop', ui.item, ui.placeholder);
  });
})(jQuery);

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!*************************************************************!*\
  !*** ./src/advanced-custom-fields-pro/assets/src/js/acf.js ***!
  \*************************************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _acf_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./_acf.js */ "./src/advanced-custom-fields-pro/assets/src/js/_acf.js");
/* harmony import */ var _acf_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_acf_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _acf_hooks_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./_acf-hooks.js */ "./src/advanced-custom-fields-pro/assets/src/js/_acf-hooks.js");
/* harmony import */ var _acf_hooks_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_acf_hooks_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _acf_model_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./_acf-model.js */ "./src/advanced-custom-fields-pro/assets/src/js/_acf-model.js");
/* harmony import */ var _acf_model_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_acf_model_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _acf_popup_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./_acf-popup.js */ "./src/advanced-custom-fields-pro/assets/src/js/_acf-popup.js");
/* harmony import */ var _acf_popup_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_acf_popup_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _acf_modal_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./_acf-modal.js */ "./src/advanced-custom-fields-pro/assets/src/js/_acf-modal.js");
/* harmony import */ var _acf_modal_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_acf_modal_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _acf_panel_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./_acf-panel.js */ "./src/advanced-custom-fields-pro/assets/src/js/_acf-panel.js");
/* harmony import */ var _acf_panel_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_acf_panel_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _acf_notice_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./_acf-notice.js */ "./src/advanced-custom-fields-pro/assets/src/js/_acf-notice.js");
/* harmony import */ var _acf_notice_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_acf_notice_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _acf_tooltip_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./_acf-tooltip.js */ "./src/advanced-custom-fields-pro/assets/src/js/_acf-tooltip.js");
/* harmony import */ var _acf_tooltip_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_acf_tooltip_js__WEBPACK_IMPORTED_MODULE_7__);








})();

/******/ })()
;
//# sourceMappingURL=acf.js.map