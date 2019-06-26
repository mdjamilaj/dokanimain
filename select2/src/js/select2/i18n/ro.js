<<<<<<< HEAD
define(function () {
  // Romanian
  return {
    errorLoading: function () {
      return 'Rezultatele nu au putut fi incărcate.';
    },
    inputTooLong: function (args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Vă rugăm să ștergeți' + overChars + ' caracter';

      if (overChars !== 1) {
        message += 'e';
      }

      return message;
    },
    inputTooShort: function (args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Vă rugăm să introduceți ' + remainingChars +
        'sau mai multe caractere';

      return message;
    },
    loadingMore: function () {
      return 'Se încarcă mai multe rezultate…';
    },
    maximumSelected: function (args) {
      var message = 'Aveți voie să selectați cel mult ' + args.maximum;
      message += ' element';

      if (args.maximum !== 1) {
        message += 'e';
      }

      return message;
    },
    noResults: function () {
      return 'Nu au fost găsite rezultate';
    },
    searching: function () {
      return 'Căutare…';
    }
  };
});
=======
define(function () {
  // Romanian
  return {
    errorLoading: function () {
      return 'Rezultatele nu au putut fi incărcate.';
    },
    inputTooLong: function (args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Vă rugăm să ștergeți' + overChars + ' caracter';

      if (overChars !== 1) {
        message += 'e';
      }

      return message;
    },
    inputTooShort: function (args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Vă rugăm să introduceți ' + remainingChars +
        'sau mai multe caractere';

      return message;
    },
    loadingMore: function () {
      return 'Se încarcă mai multe rezultate…';
    },
    maximumSelected: function (args) {
      var message = 'Aveți voie să selectați cel mult ' + args.maximum;
      message += ' element';

      if (args.maximum !== 1) {
        message += 'e';
      }

      return message;
    },
    noResults: function () {
      return 'Nu au fost găsite rezultate';
    },
    searching: function () {
      return 'Căutare…';
    }
  };
});
>>>>>>> 126491c5b956413b4ebc35a0628acbc4d375a4e7
