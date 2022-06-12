let body = document.body;
            let filtro = document.getElementById("filtro");
            let btn = document.getElementById("dark");
            let oscuros = document.querySelectorAll("sun-mode");
            let card = document.querySelectorAll(".card");
            console.log(btn);
            let sol = "☀️";
            let luna = "🌙";
            btn.addEventListener('click', ()=>{
                console.log(btn);
                if (btn.innerHTML==sol) {
                    btn.innerHTML = luna;
                    body.style.background = "#000";
                    for (let e = 0; e < card.length; e++) {
                        card[e].style.background = "#fef"
                    }
                    filtro.style.border = "3px solid #f4444f";
                    filtro.style.background = "#fff";
                    filtro.style.color = "#434642";

                }else{
                    btn.innerHTML = sol;
                    body.style.background = "#fff";
                    for (let e = 0; e < card.length; e++) {
                        card[e].style.background = "#6d6b6b"
                    }
                    filtro.style.background = "#f4444f"
                }
               

            })