<script>
    $(document).ready(function(){
        // #maskMoney

        // VMasker(document.document.querySelectorAll('.moneyClass')).maskMoney({zeroCents: true});
        // VMasker(document.document.querySelectorAll(".moneyClass")).maskMoney({unit: 'R$'});
        VMasker(document.querySelectorAll("input.moneyClass")).maskMoney({
            precision: 2,
            separator: ',',
            delimiter: ".",
        });
        //VMasker(document.querySelector("input.moneyClass")).maskPattern("");
        VMasker(document.querySelectorAll("input.expiration")).maskPattern("99/99/9999");

        // VMasker(document.getElementById("unit")).maskMoney({unit: 'R$'});
       // VMasker(document.getElementById("suffixUnit")).maskMoney({suffixUnit: 'R$'});

    })();

</script>
