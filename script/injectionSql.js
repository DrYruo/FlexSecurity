function requeteAvecInjection() {
    const formButton = document.querySelector("#btnInjectionSqlDanger");

    formButton.addEventListener("click", (event) => {
        event.preventDefault;
        console.log("coucou cest la faille");
    })
}

function initInjectionSql() {
    requeteAvecInjection();
}
