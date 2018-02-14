# Questões

| Questões 1 - 8            | Questões 8 - 15             |
|---------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 9 - Nível 2][9]   |  
     
[1]:#1-qual-a-alternativa-correta-em-relação-a-seo

***

### 1 Qual a tag utilizar para vídeo no HTML5?

- [ ] `<autoplay></autoplay>`
- [ ] `<mov></mov>`
- [x] `<video></video>`
- [ ] `<movie></movie>`
- [ ] `<mv></mv>`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/175> 

**Nível:** 1         
    
***

### 2 Qual a tag utilizar para audio no HTML5?

- [ ] `<sd></sd>`
- [ ] `<aud></aud>`
- [ ] `<autoplay></autoplay>`
- [ ] `<song></song>`
- [x] `<audio></audio>`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/184> 

**Nível:** 1         
    
***

### 3 Qual atributo devemos utilizar para que os vídeos, ou audios, sejam executados automaticamente em uma página web?

- [ ] `playauto`
- [x] `autoplay` 
- [ ] `auto-play`
- [ ] `play`
- [ ] `video-autoplay`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/176>
    2. <https://www.schoolofnet.com/curso-multimedia/184> 

**Nível:** 1      
    
***

### 4 Quais atributos devemos utilizar para que um vídeo, ou audio, seja executado automaticamente e SEM som, em uma página web?

- [ ] `playauto-muted`
- [ ] `autoplay-mute`
- [ ] `play mute`
- [ ] `autoplay mute`
- [x] `autoplay muted` 

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/176>
    2. <https://www.schoolofnet.com/curso-multimedia/184> 

**Nível:** 1         
    
***

### 5 Analise o código abaixo e assinale a alternativa INCORRETA.

```html
<video width="560" height="350" controls autoplay="false" muted poster="imagem.png">
    <source src="./video.mp4"/>
    Your browser not support this tag!!!
</video>
```

-[ ] O vídeo foi configurado com um tamanho específico de 560x350.
-[x] O vídeo não será exibido automaticamente, pois o atributo autoplay foi configurado como false.
-[ ] O vídeo será exibido automaticamente, pois tem o autoplay configurado.
-[ ] O vídeo iniciará sem som.
-[ ] O vídeo possui uma imagem de capa para exibição.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/176> 

**Nível:** 1         
    
***

### 6 Analise o código abaixo e assinale a alternativa INCORRETA.

```html
<video width="560" height="350" controls loop poster="imagem.png">
    <source src="./video.mp4"/>
    Your browser not support this tag!!!
</video>
```

-[ ] O vídeo possui botões de controle.
-[ ] O vídeo será exibido novamente, e automaticamente, sempre que terminar.
-[ ] O vídeo possui uma imagem de capa para exibição.
-[ ] O vídeo iniciará com som.
-[x] O vídeo será exibido automaticamente.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/176> 

**Nível:** 1         
    
***

### 7 Analise o código abaixo e assinale a alternativa correta.

Código HTML

```html
<video id="player" width="560" height="350" autoplay poster="image.png">
    <source src="./video.mp4"/>
    Your browser not support this tag!!!
</video>

<div>
    <button onclick="play()">Play</button> |
    <button onclick="pause()">Pause</button> |
    <button onclick="stop()">Stop</button>
</div>
```

Código javascript

```javascript
function getPlayer(){
    return document.getElementById('player');
}

function stop(){
    var stop = getPlayer();
    stop.load();
}
```

Qual frase ilustra melhor o problema encontrado acima?

- [ ] O tamanho configurado para o vídeo não funcionaria por não estar nos padrões.
- [ ] O nome da função de parar um vídeo não pode ser "stop" pois teremos conflito.
- [ ] O método load não pode ser utilizado, pois ele aponta para o final do vídeo apenas.
- [x] Não podemos utilizar o load juntamente com o atributo autoplay, porque teremos um loop de execução.
- [ ] Não teremos problema nenhum e nosso objetivo de parar o vídeo será concluído corretamente.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/177> 

**Nível:** 2         
    
***

### 8 Analise o código abaixo e marque a alternativa que contém o erro presente no código.

```javascript
function volume() {
    var volume = document.getElementById('volume').value

    if(volume === "100"){
        volume = 1
    }else {
        volume = parseFloat("0." + volume).toFixed(1)
    }
    
    var video = getPlayer();
    video.volume(volume)
}
```

- [ ] `document.getElementById('volume').value` 
- [ ] `parseFloat("0." + volume).toFixed(1)`
- [ ] `if(volume === "100"){ volume = 1 }`
- [x] `video.volume(volume)`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/178> 

**Nível:** 2         
    
***

### 9 Analise a afirmação abaixo e assinale verdadeiro ou falso.

"Em todos os navegadores podemos utilizar o método webkitEnterFullScreen, pois ele é padrão para ativar o modo full screen."

- [ ] Verdadeiro
- [x] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/179> 

**Nível:** 2

***

### 10 Analise o código abaixo e assinale a alternativa correta.

```javascript
function muted() {
    var mut = getElementById('muted');
    var video = getPlayer();

    if(video.muted){
        video.muted(false);
        mut.style.color = "black";
    }else {
        video.muted = true;
        mut.color = "red";
    }
}
```

Quantos erros você pode encontrar no código acima?

- [ ] 0
- [ ] 1
- [ ] 2
- [x] 3
- [ ] 4

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/179> 
    2. Analise erros estruturais de javascript.

**Nível:** 2

***

### 11 Qual alternativa contém todos os eventos corretos?

- [ ] played, paused, aborted, volumechanged
- [ ] onPlay, onPause, onAbort, onVolumeChange 
- [x] onplay, onpause, onabort, onvolumechange
- [ ] onplay, onpause, onload, onvolumechange
- [ ] onplay, onpause, onstop, onvolumechange

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/179> 

**Nível:** 2

***

### 12 Analise a frase abaixo e assinale verdadeiro ou falso.

"Os eventos e os atributos são praticamente iguais para as tags video e audio, em relação ao javascript."

- [x] Verdadeiro
- [ ] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/185> 

**Nível:** 2

***

### 13 Analise o código abaixo e assina-le a alternativa que contenha os eventos citados.

```javascript
function getAudioPlayer(){
    return document.getElementById('audio');
}

function playAudio(){
    var play = getAudioPlayer();
    play.play();
}

function pauseAudio(){
    var pause = getAudioPlayer();
    pause.pause();
}

function stopAudio(){
    var audio = getAudioPlayer();
    audio.load();
}

getAudioPlayer().onplay = function () {
    console.log("The audio has been started")
}
```

- [ ] Evento de play, pause e stop.
- [ ] Evento de play, pause e abort.
- [ ] Somente o evento de play e stop.
- [ ] Somente o evento de pause.
- [x] Somente o evento de play.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/185> 

**Nível:** 3

***

### 14 Qual a tag recomendada para a adição de um vídeo, do Youtube, em seu website?

- [ ] video
- [ ] audio
- [x] iframe
- [ ] figure
- [ ] multimidia

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/186> 

**Nível:** 3

***

### 15 Analise o código abaixo.

```html
<iframe width="560" height="315"
    source="https://www.youtube.com/embed/S12OgVD036g"
</iframe>
```

O código acima possui um erro. Qual alternativa descreve este erro?

- [ ] Não podemos utilizar os parâmetros width e height na tag iframe.
- [ ] A tag iframe utiliza o atributo href e não source para informar o endereço do vídeo.
- [x] O correto seria utilizar o atributo src ao invés de source.
- [ ] Não é permitido quebrar a linha para informar o atributo src.
- [ ] Não existe nenhum erro no código acima.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/186> 

**Nível:** 3

***

### 16 Como podemos passar um parâmetro para um vídeo do youtube, utilizando iframe?

- [ ] Através dos atributos das tags.
- [x] Através de parâmetros na url.
- [ ] Através de uma função javascript. 
- [ ] Somente com HTML.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/187> 

**Nível:** 3

***

### 17 Quais parâmetros estão presentes na url abaixo?

```html
<iframe width="560" height="315"
    src="https://www.youtube.com/embed/S12OgVD036g?autoplay=0&controls=0&showinfo=0">
</iframe>
```

- [ ] embed e autoplay
- [ ] controls e showinfo
- [ ] embed, autoplay, controls e showinfo 
- [x] autoplay, controls e showinfo
- [ ] autoplay, controls, modestbranding e showinfo

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/187> 

**Nível:** 3

***

### 18 Analise os dois iframes abaixo.

```html
<iframe width="560" height="315"
        src="https://www.youtube.com/embed/S12OgVD036g?listType=playlist&playlist=R_3y4Gl8XpA,Im9WTcDJ-2Y">
</iframe>

<iframe width="560" height="315"
        src="https://www.youtube.com/embed?listType=playlist&list=PLt3tq0MBSMpk8ozG5GNIC1U14PTiZf7Fy">
</iframe>
```

Qual alternativa está CORRETA em relação aos dois iframes acima?

- [ ] O primeiro tem o parâmetro listType sendo playlist e o segundo não.
- [ ] O segundo tem o parâmetro listType sendo playlist e o primeiro não.
- [x] O primeiro é uma lista programada manualmente e o segundo uma lista já existente do Youtube.
- [ ] Os dois são idênticos, só muda a forma de apresentar a listagem.
- [ ] Nenhum dos dois são playlists, são vídeos independentes.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/188> 

**Nível:** 3

***

### 19 Analise o iframe abaixo.

```html
<iframe width="560" height="315"
        src="https://www.youtube.com/embed?listType=playlist&list=codeeducation">
</iframe>
```

Para alterar o iframe acima para uma busca personalizada, no youtube, qual parâmetro deve ser alterado e qual o valor a ser informado?

- [ ] list e search
- [ ] list e busca
- [ ] listType e searchplay
- [x] listType e search
- [ ] listType e busca

* **Dica:**
    1. <https://www.schoolofnet.com/curso-multimedia/189>
    2. Lembrando que estes dados são da API do Youtube e podem ser modificados em futuras atualizações. Portanto, use como parâmetro o conteúdo aprendido na video aula acima.

**Nível:** 3

***