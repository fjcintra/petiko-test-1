<html>
    <head>
        <script>
            // Escreva uma função que converta a data de entrada do usuário formatada como MM/DD/YYYY em um formato exigido por uma API (YYYYMMDD). O parâmetro "userDate" e o valor de retorno são strings.

// Por exemplo, ele deve converter a data de entrada do usuário "31/12/2014" em "20141231" adequada para a API.


function formatDate(userDate) {
  // format from M/D/YYYY to YYYYMMDD
  let date = new String(userDate)
  let dateParts = date.split('/')
  let year = dateParts[2]
  let month = dateParts[1].padStart(2,'0')
  let day = dateParts[0].padStart(2,'0')
  let newDateFormat = year + month + day
  return newDateFormat
}

console.log(formatDate("12/31/2014"));
        </script>
    </head>
</html>