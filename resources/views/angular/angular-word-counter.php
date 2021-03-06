<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Word Counter Angular
    </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/a04d9e4c1c.js"></script>
    <link rel="stylesheet" type="text/css" href="/angular-word-counter/styles.css" />
</head>
<body ng-app="app" ng-cloak ng-controller="MainCtrl as mainCtrl">

<ng-include style="text-align: left;" src="'/partials/nav'"></ng-include>

    <!-- <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="/angular-word-counter/" class="navbar-brand">
                        Angular Word Counter
                    </a>
                </div>
            </div>
        </nav>
    </header> -->

    <div class="input-saved-alert container"  ng-show="mainCtrl.recentlySaved">
        <div class="alert alert-success">
            Input Saved!
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div ng-class="{'col-md-8': mainCtrl.savedInputs.length, 'col-md-12': !mainCtrl.savedInputs.length }">
                <h2>Angular Word Counter</h2>
                <label for="word-input">Input</label>
                <textarea class="form-control" rows="10" id="word-input" ng-model="mainCtrl.userInput" ng-trim="true"></textarea>
                <button class="save-button btn btn-primary btn-block btn-lg" ng-click="mainCtrl.addSavedInput()">
                    Save for later
                </button>
                <div class="statistics">
                    <h3>Statistics</h3>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="pull-right badge">
                                {{mainCtrl.getWordCount()}}
                            </span>
                            Word Count
                        </li>
                        <li class="list-group-item">
                            <span class="pull-right badge">
                                {{mainCtrl.getCharacterCount()}}
                            </span>
                            Character Count
                        </li>
                        <li class="list-group-item">
                            <span class="pull-right badge">
                                {{mainCtrl.getMostCommonWord()}}
                            </span>
                            Most Common Word
                        </li>
                        <li class="list-group-item">
                            <span class="pull-right badge">
                                {{mainCtrl.getMostCommonCharacter()}}
                            </span>
                            Most Common Character
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4" ng-show="mainCtrl.savedInputs.length">
                <h2>
                    Recently Saved
                    <small>
                        ({{mainCtrl.savedInputs.length}} total)
                    </small>
                </h2>
                <input
                    type="text"
                    class="form-control"
                    ng-model="mainCtrl.savedSearch"
                    placeholder="Filter saved inputs"
                >
                <hr>
                <ul class="list-group">
                    <li
                        class="list-group-item"
                        ng-repeat="input in mainCtrl.savedInputs | filter:mainCtrl.savedSearch | orderBy: '-time'"
                    >
                        <a href="" ng-click="mainCtrl.setInput(input.value)">{{input.value}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <footer class="page-footer">
        <div class="container">
            &copy; Awesome Inc U. Bootcamp 2016
        </div>
    </footer>

    <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ramda/0.22.1/ramda.min.js"></script>
    <script src="/angular-word-counter/app.js"></script>
</body>
</html>