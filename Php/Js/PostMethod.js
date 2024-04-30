        //Scale javascript
        document.addEventListener('DOMContentLoaded', () => {
                const bullets = document.querySelectorAll('.bullet');
                const selectedRating = document.getElementById('selectedRating');

                bullets.forEach(bullet => {
                    bullet.addEventListener('click', () => {
                        const value = bullet.getAttribute('data-value');
                        selectedRating.value = value;
                        
                        bullets.forEach(b => {
                            b.classList.remove('selected');
                        });

                        bullet.classList.add('selected'); 
                    }); 
                }); 
            });

        // Location javascript
        function chosenplace(location){
            const selectedplaceinput = document.getElementById('selectedlocation');
            const selectedvalue = location.value;
            selectedplaceinput.value = selectedvalue;
        }

        // Radio javascript
        function chosenday(selectedradio){
                const chosendayinput = document.getElementById('selectedday');
                chosendayinput.value = selectedradio.value;    
            }

        // Emotion javascript
        function chosenemotion(){
            const selectedemotioninput = document.getElementById('emotions');
            const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            const selectedemotion = Array.from(checkboxes).map(checkbox => checkbox.value);

            selectedemotioninput.value = selectedemotion.join(', ');
        }

        