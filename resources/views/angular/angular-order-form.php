<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Form</title>
    <link rel="stylesheet" href="/angular-order-form/style.css">
</head>
<body ng-app="app">

<ng-include style="text-align: left;" src="'/partials/nav'"></ng-include>

<!-- Declare a new AngularJS app and associate the controller -->
<form ng-controller="OrderFormController">

  <h1>Services</h1>

    <table>
        <tr ng-repeat="service in services" ng-click="toggleActive(service)">
            <td ng-class="{active:service.active}">{{service.name}}</td>
            <td ng-class="{active:service.active}" class="price">{{service.price | currency}}</td>
            <td ng-class="{active:service.active}">
              <button ng-click="remove(this)">Remove</button>
            </td>
        </tr>
        <tr>
          <td colspan=3 class="add-service">
            <div class="id" ng-hide="input" ng-click="input = true;">Add a Service</div>
            <div ng-show="input">
              <input type="text" placeholder="name" ng-model="name">
              <input type="number" placeholder="price" ng-model="price">
              <input type="submit" id="submit" value="Submit" ng-click="addService()" ng-disabled="!name || !price"/>
              <input type="submit" name="cancel" value="X" ng-click="input=false">
            </div>
          </td>
        </tr>
        <tr class="total">
          <td>Total:</td>
          <td class="price">{{total() | currency}}</td>
          <td></td>
    </table>

</form>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script src="/angular-order-form/main.js"></script>

</body>
</html>
