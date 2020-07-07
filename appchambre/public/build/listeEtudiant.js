(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["listeEtudiant"],{

/***/ "./assets/js/listeEtudiant.js":
/*!************************************!*\
  !*** ./assets/js/listeEtudiant.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! core-js/modules/es.array.concat */ "./node_modules/core-js/modules/es.array.concat.js");

$(document).ready(function (e) {
  alletudiant();

  function alletudiant() {
    alert("ok");
    var limit = 2;
    var offset = 0;
    var url = Routing.generate("alllistetudiant");
    var tbody = $("#list-etudiant");
    $.ajax({
      url: url,
      type: "POST",
      dataType: "Json",
      data: {
        limit: limit,
        offset: offset
      }
    }).done(function (response) {
      alert("success");
      console.log(response);
      tbody.html('');
      printTable(response, tbody);
      offset += 2;
    }).fail(function (xhr, status, error) {
      alert("error");
      console.log(xhr);
    });
  }

  function printTable(response, tbody) {
    $.each(response, function (key, value) {
      var tdBoursier = tdLogier = tdIdchambre = "";
      console.log(value.id); //On gère l'affichage dynamique de la colonne boursier

      if (value.idTypeBourse) {
        if (value.idTypeBourse === 1) {
          tdBoursier = '<td class="align-middle text-success"><span id="idTypeBourse" typebourse="demi">Oui</span></td>';
        } else if (value.idTypeBourse === 2) {
          tdBoursier = '<td class="align-middle text-success"><span id="idTypeBourse" typebourse="entiere">Oui</span></td>';
        }
      } else {
        tdBoursier = '<td class="align-middle text-danger"><span id="idTypeBourse" typeBourse="non">Non</span></td>';
      }

      if (value.inshoused) {
        if (value.inshoused === 1) {
          tdLogier = '<td class="align-middle text-success"><span id="inshoused" inshoused="1">Oui</span></td>';
        } else {
          tdLogier = '<td class="align-middle text-danger"><span id="inshoused" inshoused="0">Non</span></td>';
        }
      } else {
        tdLogier = '<td class="align-middle text-danger"><span id="inshoused" inshoused="0">Non</span></td>';
      }

      if (value.numeroChambre) {
        tdNumeroChambre = '<td class="align-middle"><span id="numeroChambre">' + value.numeroChambre + '</span></td>';
      } else {
        tdNumeroChambre = '<td class="align-middle"><span id="numeroChambre">---</span></td>';
      }

      tbody.append("\n                <tr id=\"list_table\" idEtudiant=\"".concat(value.id, "\">\n                    <td class=\"align-middle\"><span id=\"matricule\">").concat(value.matricule, "</span></td>\n                    <td class=\"align-middle\"><span id=\"prenom\">").concat(value.prenom, "</span></td>\n                    <td class=\"align-middle\"><span id=\"nom\">").concat(value.nom, "</span></td>\n                    ").concat(tdBoursier, "\n                    ").concat(tdLogier, "\n                    ").concat(tdNumeroChambre, "\n                    <td id=\"\"><button class=\"btn btn-danger\"><span class=\"fa fa-archive\"></span></button></td>\n                </tr>\n            "));
    });
  }
});

/***/ })

},[["./assets/js/listeEtudiant.js","runtime","vendors~listeEtudiant"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvbGlzdGVFdHVkaWFudC5qcyJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsImUiLCJhbGxldHVkaWFudCIsImFsZXJ0IiwibGltaXQiLCJvZmZzZXQiLCJ1cmwiLCJSb3V0aW5nIiwiZ2VuZXJhdGUiLCJ0Ym9keSIsImFqYXgiLCJ0eXBlIiwiZGF0YVR5cGUiLCJkYXRhIiwiZG9uZSIsInJlc3BvbnNlIiwiY29uc29sZSIsImxvZyIsImh0bWwiLCJwcmludFRhYmxlIiwiZmFpbCIsInhociIsInN0YXR1cyIsImVycm9yIiwiZWFjaCIsImtleSIsInZhbHVlIiwidGRCb3Vyc2llciIsInRkTG9naWVyIiwidGRJZGNoYW1icmUiLCJpZCIsImlkVHlwZUJvdXJzZSIsImluc2hvdXNlZCIsIm51bWVyb0NoYW1icmUiLCJ0ZE51bWVyb0NoYW1icmUiLCJhcHBlbmQiLCJtYXRyaWN1bGUiLCJwcmVub20iLCJub20iXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7O0FBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsVUFBU0MsQ0FBVCxFQUFXO0FBRXpCQyxhQUFXOztBQUVYLFdBQVNBLFdBQVQsR0FDQTtBQUNJQyxTQUFLLENBQUMsSUFBRCxDQUFMO0FBQ0EsUUFBSUMsS0FBSyxHQUFHLENBQVo7QUFDQSxRQUFJQyxNQUFNLEdBQUcsQ0FBYjtBQUNBLFFBQUlDLEdBQUcsR0FBR0MsT0FBTyxDQUFDQyxRQUFSLENBQWlCLGlCQUFqQixDQUFWO0FBQ0EsUUFBTUMsS0FBSyxHQUFHWCxDQUFDLENBQUMsZ0JBQUQsQ0FBZjtBQUVBQSxLQUFDLENBQUNZLElBQUYsQ0FBTztBQUNISixTQUFHLEVBQUNBLEdBREQ7QUFFSEssVUFBSSxFQUFDLE1BRkY7QUFHSEMsY0FBUSxFQUFDLE1BSE47QUFJSEMsVUFBSSxFQUFDO0FBQ0RULGFBQUssRUFBQ0EsS0FETDtBQUVEQyxjQUFNLEVBQUNBO0FBRk47QUFKRixLQUFQLEVBUUdTLElBUkgsQ0FRUSxVQUFTQyxRQUFULEVBQWtCO0FBQ3RCWixXQUFLLENBQUMsU0FBRCxDQUFMO0FBQ0FhLGFBQU8sQ0FBQ0MsR0FBUixDQUFZRixRQUFaO0FBQ0FOLFdBQUssQ0FBQ1MsSUFBTixDQUFXLEVBQVg7QUFDQUMsZ0JBQVUsQ0FBQ0osUUFBRCxFQUFVTixLQUFWLENBQVY7QUFDQUosWUFBTSxJQUFFLENBQVI7QUFDSCxLQWRELEVBY0dlLElBZEgsQ0FjUSxVQUFTQyxHQUFULEVBQWFDLE1BQWIsRUFBb0JDLEtBQXBCLEVBQTJCO0FBQy9CcEIsV0FBSyxDQUFDLE9BQUQsQ0FBTDtBQUNBYSxhQUFPLENBQUNDLEdBQVIsQ0FBWUksR0FBWjtBQUNILEtBakJEO0FBa0JIOztBQUdELFdBQVNGLFVBQVQsQ0FBb0JKLFFBQXBCLEVBQTZCTixLQUE3QixFQUNBO0FBRUlYLEtBQUMsQ0FBQzBCLElBQUYsQ0FBT1QsUUFBUCxFQUFnQixVQUFTVSxHQUFULEVBQWFDLEtBQWIsRUFBbUI7QUFDL0IsVUFBSUMsVUFBVSxHQUFHQyxRQUFRLEdBQUdDLFdBQVcsR0FBRyxFQUExQztBQUNBYixhQUFPLENBQUNDLEdBQVIsQ0FBWVMsS0FBSyxDQUFDSSxFQUFsQixFQUYrQixDQUcvQjs7QUFDQSxVQUFHSixLQUFLLENBQUNLLFlBQVQsRUFDQTtBQUNJLFlBQUdMLEtBQUssQ0FBQ0ssWUFBTixLQUF1QixDQUExQixFQUE0QjtBQUN4Qkosb0JBQVUsR0FBRyxpR0FBYjtBQUNILFNBRkQsTUFFTSxJQUFHRCxLQUFLLENBQUNLLFlBQU4sS0FBdUIsQ0FBMUIsRUFBNEI7QUFDOUJKLG9CQUFVLEdBQUcsb0dBQWI7QUFDSDtBQUNKLE9BUEQsTUFPSztBQUNEQSxrQkFBVSxHQUFHLCtGQUFiO0FBQ0g7O0FBQ0QsVUFBR0QsS0FBSyxDQUFDTSxTQUFULEVBQW1CO0FBQ2YsWUFBR04sS0FBSyxDQUFDTSxTQUFOLEtBQW9CLENBQXZCLEVBQXlCO0FBQ3JCSixrQkFBUSxHQUFHLDBGQUFYO0FBQ0gsU0FGRCxNQUVLO0FBQ0RBLGtCQUFRLEdBQUcseUZBQVg7QUFDSDtBQUNKLE9BTkQsTUFNSztBQUNEQSxnQkFBUSxHQUFHLHlGQUFYO0FBQ0g7O0FBQ0QsVUFBR0YsS0FBSyxDQUFDTyxhQUFULEVBQXVCO0FBQ25CQyx1QkFBZSxHQUFHLHVEQUFxRFIsS0FBSyxDQUFDTyxhQUEzRCxHQUF5RSxjQUEzRjtBQUNILE9BRkQsTUFFSztBQUNEQyx1QkFBZSxHQUFHLG1FQUFsQjtBQUNIOztBQUVEekIsV0FBSyxDQUFDMEIsTUFBTixnRUFDc0NULEtBQUssQ0FBQ0ksRUFENUMsd0ZBRXdESixLQUFLLENBQUNVLFNBRjlELDhGQUdxRFYsS0FBSyxDQUFDVyxNQUgzRCwyRkFJa0RYLEtBQUssQ0FBQ1ksR0FKeEQsK0NBS1VYLFVBTFYsbUNBTVVDLFFBTlYsbUNBT1VNLGVBUFY7QUFXSCxLQXhDRDtBQXlDSDtBQUVKLENBL0VELEUiLCJmaWxlIjoibGlzdGVFdHVkaWFudC5qcyIsInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKGUpe1xuXG4gICAgYWxsZXR1ZGlhbnQoKTtcblxuICAgIGZ1bmN0aW9uIGFsbGV0dWRpYW50KClcbiAgICB7XG4gICAgICAgIGFsZXJ0KFwib2tcIik7XG4gICAgICAgIGxldCBsaW1pdCA9IDI7XG4gICAgICAgIGxldCBvZmZzZXQgPSAwO1xuICAgICAgICBsZXQgdXJsID0gUm91dGluZy5nZW5lcmF0ZShcImFsbGxpc3RldHVkaWFudFwiKVxuICAgICAgICBjb25zdCB0Ym9keSA9ICQoXCIjbGlzdC1ldHVkaWFudFwiKTtcblxuICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgdXJsOnVybCxcbiAgICAgICAgICAgIHR5cGU6XCJQT1NUXCIsXG4gICAgICAgICAgICBkYXRhVHlwZTpcIkpzb25cIixcbiAgICAgICAgICAgIGRhdGE6e1xuICAgICAgICAgICAgICAgIGxpbWl0OmxpbWl0LFxuICAgICAgICAgICAgICAgIG9mZnNldDpvZmZzZXRcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSkuZG9uZShmdW5jdGlvbihyZXNwb25zZSl7XG4gICAgICAgICAgICBhbGVydChcInN1Y2Nlc3NcIik7XG4gICAgICAgICAgICBjb25zb2xlLmxvZyhyZXNwb25zZSlcbiAgICAgICAgICAgIHRib2R5Lmh0bWwoJycpO1xuICAgICAgICAgICAgcHJpbnRUYWJsZShyZXNwb25zZSx0Ym9keSk7XG4gICAgICAgICAgICBvZmZzZXQrPTI7XG4gICAgICAgIH0pLmZhaWwoZnVuY3Rpb24oeGhyLHN0YXR1cyxlcnJvciwpe1xuICAgICAgICAgICAgYWxlcnQoXCJlcnJvclwiKTtcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKHhocik7XG4gICAgICAgIH0pXG4gICAgfVxuXG5cbiAgICBmdW5jdGlvbiBwcmludFRhYmxlKHJlc3BvbnNlLHRib2R5KVxuICAgIHtcblxuICAgICAgICAkLmVhY2gocmVzcG9uc2UsZnVuY3Rpb24oa2V5LHZhbHVlKXtcbiAgICAgICAgICAgIGxldCB0ZEJvdXJzaWVyID0gdGRMb2dpZXIgPSB0ZElkY2hhbWJyZSA9IFwiXCI7XG4gICAgICAgICAgICBjb25zb2xlLmxvZyh2YWx1ZS5pZCk7XG4gICAgICAgICAgICAvL09uIGfDqHJlIGwnYWZmaWNoYWdlIGR5bmFtaXF1ZSBkZSBsYSBjb2xvbm5lIGJvdXJzaWVyXG4gICAgICAgICAgICBpZih2YWx1ZS5pZFR5cGVCb3Vyc2UpXG4gICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgaWYodmFsdWUuaWRUeXBlQm91cnNlID09PSAxKXtcbiAgICAgICAgICAgICAgICAgICAgdGRCb3Vyc2llciA9ICc8dGQgY2xhc3M9XCJhbGlnbi1taWRkbGUgdGV4dC1zdWNjZXNzXCI+PHNwYW4gaWQ9XCJpZFR5cGVCb3Vyc2VcIiB0eXBlYm91cnNlPVwiZGVtaVwiPk91aTwvc3Bhbj48L3RkPidcbiAgICAgICAgICAgICAgICB9ZWxzZSBpZih2YWx1ZS5pZFR5cGVCb3Vyc2UgPT09IDIpe1xuICAgICAgICAgICAgICAgICAgICB0ZEJvdXJzaWVyID0gJzx0ZCBjbGFzcz1cImFsaWduLW1pZGRsZSB0ZXh0LXN1Y2Nlc3NcIj48c3BhbiBpZD1cImlkVHlwZUJvdXJzZVwiIHR5cGVib3Vyc2U9XCJlbnRpZXJlXCI+T3VpPC9zcGFuPjwvdGQ+J1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1lbHNle1xuICAgICAgICAgICAgICAgIHRkQm91cnNpZXIgPSAnPHRkIGNsYXNzPVwiYWxpZ24tbWlkZGxlIHRleHQtZGFuZ2VyXCI+PHNwYW4gaWQ9XCJpZFR5cGVCb3Vyc2VcIiB0eXBlQm91cnNlPVwibm9uXCI+Tm9uPC9zcGFuPjwvdGQ+JztcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIGlmKHZhbHVlLmluc2hvdXNlZCl7XG4gICAgICAgICAgICAgICAgaWYodmFsdWUuaW5zaG91c2VkID09PSAxKXtcbiAgICAgICAgICAgICAgICAgICAgdGRMb2dpZXIgPSAnPHRkIGNsYXNzPVwiYWxpZ24tbWlkZGxlIHRleHQtc3VjY2Vzc1wiPjxzcGFuIGlkPVwiaW5zaG91c2VkXCIgaW5zaG91c2VkPVwiMVwiPk91aTwvc3Bhbj48L3RkPidcbiAgICAgICAgICAgICAgICB9ZWxzZXtcbiAgICAgICAgICAgICAgICAgICAgdGRMb2dpZXIgPSAnPHRkIGNsYXNzPVwiYWxpZ24tbWlkZGxlIHRleHQtZGFuZ2VyXCI+PHNwYW4gaWQ9XCJpbnNob3VzZWRcIiBpbnNob3VzZWQ9XCIwXCI+Tm9uPC9zcGFuPjwvdGQ+J1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1lbHNle1xuICAgICAgICAgICAgICAgIHRkTG9naWVyID0gJzx0ZCBjbGFzcz1cImFsaWduLW1pZGRsZSB0ZXh0LWRhbmdlclwiPjxzcGFuIGlkPVwiaW5zaG91c2VkXCIgaW5zaG91c2VkPVwiMFwiPk5vbjwvc3Bhbj48L3RkPidcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIGlmKHZhbHVlLm51bWVyb0NoYW1icmUpe1xuICAgICAgICAgICAgICAgIHRkTnVtZXJvQ2hhbWJyZSA9ICc8dGQgY2xhc3M9XCJhbGlnbi1taWRkbGVcIj48c3BhbiBpZD1cIm51bWVyb0NoYW1icmVcIj4nK3ZhbHVlLm51bWVyb0NoYW1icmUrJzwvc3Bhbj48L3RkPidcbiAgICAgICAgICAgIH1lbHNle1xuICAgICAgICAgICAgICAgIHRkTnVtZXJvQ2hhbWJyZSA9ICc8dGQgY2xhc3M9XCJhbGlnbi1taWRkbGVcIj48c3BhbiBpZD1cIm51bWVyb0NoYW1icmVcIj4tLS08L3NwYW4+PC90ZD4nXG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIHRib2R5LmFwcGVuZChgXG4gICAgICAgICAgICAgICAgPHRyIGlkPVwibGlzdF90YWJsZVwiIGlkRXR1ZGlhbnQ9XCIke3ZhbHVlLmlkfVwiPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9XCJhbGlnbi1taWRkbGVcIj48c3BhbiBpZD1cIm1hdHJpY3VsZVwiPiR7dmFsdWUubWF0cmljdWxlfTwvc3Bhbj48L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9XCJhbGlnbi1taWRkbGVcIj48c3BhbiBpZD1cInByZW5vbVwiPiR7dmFsdWUucHJlbm9tfTwvc3Bhbj48L3RkPlxuICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9XCJhbGlnbi1taWRkbGVcIj48c3BhbiBpZD1cIm5vbVwiPiR7dmFsdWUubm9tfTwvc3Bhbj48L3RkPlxuICAgICAgICAgICAgICAgICAgICAke3RkQm91cnNpZXJ9XG4gICAgICAgICAgICAgICAgICAgICR7dGRMb2dpZXJ9XG4gICAgICAgICAgICAgICAgICAgICR7dGROdW1lcm9DaGFtYnJlfVxuICAgICAgICAgICAgICAgICAgICA8dGQgaWQ9XCJcIj48YnV0dG9uIGNsYXNzPVwiYnRuIGJ0bi1kYW5nZXJcIj48c3BhbiBjbGFzcz1cImZhIGZhLWFyY2hpdmVcIj48L3NwYW4+PC9idXR0b24+PC90ZD5cbiAgICAgICAgICAgICAgICA8L3RyPlxuICAgICAgICAgICAgYCk7XG4gICAgICAgIH0pXG4gICAgfVxuXG59KVxuXG5cbiJdLCJzb3VyY2VSb290IjoiIn0=