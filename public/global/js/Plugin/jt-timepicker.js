(function (global, factory) {
  if (typeof define === "function" && define.amd) {
    define("/Plugin/jt-timepicker", ["exports", "Plugin"], factory);
  } else if (typeof exports !== "undefined") {
    factory(exports, require("Plugin"));
  } else {
    var mod = {
      exports: {}
    };
    factory(mod.exports, global.Plugin);
    global.PluginJtTimepicker = mod.exports;
  }
})(this, function (_exports, _Plugin2) {
  "use strict";

  Object.defineProperty(_exports, "__esModule", {
    value: true
  });
  _exports.default = void 0;
  _Plugin2 = babelHelpers.interopRequireDefault(_Plugin2);
  // import $ from 'jquery';
  var NAME = 'timepicker';

  var Timepicker =
  /*#__PURE__*/
  function (_Plugin) {
    babelHelpers.inherits(Timepicker, _Plugin);

    function Timepicker() {
      babelHelpers.classCallCheck(this, Timepicker);
      return babelHelpers.possibleConstructorReturn(this, babelHelpers.getPrototypeOf(Timepicker).apply(this, arguments));
    }

    babelHelpers.createClass(Timepicker, [{
      key: "getName",
      value: function getName() {
        return NAME;
      }
    }], [{
      key: "getDefaults",
      value: function getDefaults() {
        return {};
      }
    }]);
    return Timepicker;
  }(_Plugin2.default);

  _Plugin2.default.register(NAME, Timepicker);

  var _default = Timepicker;
  _exports.default = _default;
});