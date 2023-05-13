(function (global, factory) {
  typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
  typeof define === 'function' && define.amd ? define(['exports'], factory) :
  (global = typeof globalThis !== 'undefined' ? globalThis : global || self, factory(global.ru = {}));
}(this, (function (exports) { 'use strict';

  var fp = typeof window !== "undefined" && window.flatpickr !== undefined
      ? window.flatpickr
      : {
          l10ns: {},
      };
  var Russian = {
      weekdays: {
          shorthand: ['So', 'Ma', 'Di', 'Wo', 'Do', 'Vry', 'Sa'],
          longhand: [
             'Sondag',
              'Maandag',
              'Dinsdag',
              'Woensdag',
              'Donderdag',
              'Vrydag',
              'Saterdag',
          ],
      },
      months: {
          shorthand: [
              'Jan',
              'Feb',
              'Mar',
              'Apr',
              'Mei',
              'Jun',
              'Jul',
              'Aug',
              'Sep',
              'Okt',
              'Nov',
              'Des',
          ],
          longhand: [
              'Januarie',
              'Februarie',
              'Maart',
              'April',
              'Mei',
              'Junie',
              'Julie',
              'Augustus',
              'September',
              'Oktober',
              'November',
              'Desember',
          ],
      },
      firstDayOfWeek: 1,
      ordinal: function () {
          return "";
      },
      rangeSeparator: " — ",
      weekAbbreviation: 'Week',
      scrollTitle: 'Blaai om te vergroot',
      toggleTitle: 'Druk om te skakel',
      amPM: ['DP', 'PP'],
      yearAriaLabel: 'Jaar',
      time_24hr: true,
  };
  fp.l10ns.fa = Afrikaans;
  var af = fp.l10ns;

  exports.Afrikaans = Afrikaans;
  exports.default = af;

  Object.defineProperty(exports, '__esModule', { value: true });

})));