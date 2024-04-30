/* ELEMENTS OF PRODUCTS JAVASCRIPT USING JAVASCRIPT DICTIONARIES */
    document.addEventListener('DOMContentLoaded', function () {
        var artistsData = {
            'Acoustic Guitar': {
                image: 'Pictures/AcousticGuitar.png',
                types: 'String',
                price: '₱1,500'
            },
            'Electric Guitar': {
                image: 'Pictures/ElectricGuitar.png',
                types: 'String',
                price: '₱5,000'
            },
            'Drums Set': {
                image: 'Pictures/Drumset.png',
                types: 'Percussion',
                price: '₱15,000'
            },
            'Electric Piano': {
                image: 'Pictures/ElectricPiano.png',
                types: 'Keyboard',
                price: '₱2,500'
            },
            'Electric Bass': {
                image: 'Pictures/ElectricBass.png',
                types: 'String',
                price: '₱6,000'
            },
            'Ukulele': {
                image: 'Pictures/Ukulele.png',
                types: 'String',
                price: '₱1,000'
            },
            'Beatbox': {
                image: 'Pictures/Beatbox.png',
                types: 'Percussion',
                price: '₱1,200'
            },
            'Trumpet': {
                image: 'Pictures/Trumpet.png',
                types: 'Aerophones',
                price: '₱14,000'
            },
            'Electric Drum Set': {
                image: 'Pictures/ElectricDrumSet.png',
                types: 'Percussion',
                price: '₱25,000'
            },
            'Kalimba': {
                image: 'Pictures/Kalimba.png',
                types: 'Idiophones',
                price: '₱350'
            },
            'Clarinet': {
                image: 'Pictures/Klarinet.png',
                types: 'Aerophones',
                price: '₱15,000'
            }
        };

    /* SEARCH BAR JAVASCRIPT FOR FILTERING */
    var artistListContainer = document.getElementById('artist-list');

    function filterArtists(searchValue) {
        artistListContainer.innerHTML = ''; 
        Object.keys(artistsData).forEach(function (artist) {
            if (artist.toLowerCase().includes(searchValue)) {
                var row = document.createElement('div');
                row.classList.add('row');
                row.innerHTML = `
                    <span class="cell"><img src="${artistsData[artist].image}" alt="Instrument Album"></span>
                    <span class="cell">${artist}</span>
                    <span class="cell">${artistsData[artist].types}</span>
                    <span class="cell">${artistsData[artist].price}</span>
                `;
                artistListContainer.appendChild(row);
            }
        });
    }

    /* SEARCH BAR JAVASCRIPT FOR FILTERING */
    var searchInput = document.getElementById('search-input');
        searchInput.addEventListener('input', function (e) {
            var searchValue = e.target.value.toLowerCase();
            filterArtists(searchValue);
        });
        filterArtists('');
    });

    /* LOAD BUTTON JAVASCRIPT */
    window.onload = function() {
        var rows = document.getElementsByClassName('row');
        var loadMoreButton = document.getElementById('loadMore');
        var loadingText = document.getElementById('loading');
        var totalRows = rows.length;

        for (var i = 10; i < totalRows; i++) {
            rows[i].style.display = 'none';
        }

        loadMoreButton.onclick = function() {
            loadingText.style.display = 'block';

            setTimeout(function() {
                loadingText.style.display = 'none';
                var shownCount = 0;
                for (var i = 10; i < totalRows; i++) {
                    if (rows[i].style.display === 'none') {
                        rows[i].style.display = 'flex';
                        shownCount++;
                        if (shownCount >= 10) {
                            break;
                        }
                    }
                }
                if (document.querySelectorAll('.row:not([style*="display: none"])').length === totalRows) {
                    loadMoreButton.style.display = 'none';
                }
            }, 1000);
        };
    };