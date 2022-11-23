// [料理名必須チェック]
var Name = document.getElementById("meal-name");
console.log(Name);
Name.addEventListener("blur", function () {
    // Laravelのバリデーション後、jsでのチェックと重複しないように処理
    var Errorname = document.getElementById("error-name");
    if (Errorname != null) Errorname.classList.add("hidden");

    var errName = document.getElementById("name-check");
    if (!Name.value) {
        errName.classList.add("visible");
    } else {
        errName.classList.remove("visible");
    }
});
// [コスト必須チェック]
var Cost = document.getElementById("meal-cost");
Cost.addEventListener("blur", function () {
    // Laravelのバリデーション後、jsでのチェックと重複しないように処理
    var Errorcost = document.getElementById("error-cost");
    if (Errorcost != null) Errorcost.classList.add("hidden");

    var errCost = document.getElementById("cost-check");
    if (!Cost.value) {
        errCost.classList.add("visible");
    } else {
        errCost.classList.remove("visible");
    }
});
// [材料メモ必須チェック]
var Ingredient = document.getElementById("meal-ingredient");
Ingredient.addEventListener("blur", function () {
    // Laravelのバリデーション後、jsでのチェックと重複しないように処理
    var Erroringredient = document.getElementById("error-ingredient");
    if (Erroringredient != null) Erroringredient.classList.add("hidden");
    var errIngredient = document.getElementById("ingredient-check");
    if (!Ingredient.value) {
        errIngredient.classList.add("visible");
    } else {
      errIngredient.classList.remove("visible");
    }
});
// [作り方必須チェック]
var Way = document.getElementById("meal-way");
Way.addEventListener("blur", function () {
    // Laravelのバリデーション後、jsでのチェックと重複しないように処理
    var Errorway = document.getElementById("error-way");
    if (Errorway != null) Errorway.classList.add("hidden");
    var errWay = document.getElementById("way-check");
    if (!Cost.value) {
        errWay.classList.add("visible");
    } else {
        errWay.classList.remove("visible");
    }
});



