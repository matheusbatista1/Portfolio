import './assets/css/style.css';

document.addEventListener("DOMContentLoaded", function () {
    const threelineIcon = document.getElementById("menu-toggle");
    threelineIcon.addEventListener("click", openMenu);

    function openMenu() {
        const menu = document.querySelector('.menu-principal');

        if (menu.classList.contains("menujs")){
            menu.classList.remove("menujs");
            threelineIcon.innerHTML = "&#9776;";
        } else {
            menu.classList.add("menujs");
            threelineIcon.innerHTML = "&Cross;";
        }
    }

    const repositorios = document.getElementById('repositorios');

    function getApiGitHub () {
        fetch('https://api.github.com/users/matheusbatista1/repos')
            .then(async res => {
                if (!res.ok) {
                    throw new Error(res.status);
                }

                let data = await res.json();
                data.map(item => {
                    let project = document.createElement('div');

                    project.innerHTML = `
                    <div class="project">
                        <div>
                            <h4 class="project__title">${item.name}</h4>
                            <span class="project__date-create">${Intl.DateTimeFormat('pt-BR').format(new Date(item.created_at))}</span>
                        </div>
                        <div>
                            <a href="${item.html_url}" target="_blank">${item.html_url}</a>
                            <span class="project__language"><span class="circle"></span>${item.language}</span>
                        </div>

                        <div>
                            <p>${item.description}</p>
                        </div>
                    </div>
                    `;
                    repositorios.appendChild(project);
                });
            })
            .catch(error => {
                console.error("Erro na solicitação à API:", error);
            });
    }

    getApiGitHub(); // Chame a função dentro do evento "DOMContentLoaded"
});
