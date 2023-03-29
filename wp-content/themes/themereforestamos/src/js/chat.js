(()=> {
    'use strict'
    /** Container general bot --------------------------------------------*/
    const botContainer = document.querySelector('.bot');

    /** Container Chat ---------------------------------------------------*/
    // Container Chat
    const containerChat = document.createElement('div');
    containerChat.classList.add('container__chat', 'chat');
    containerChat.setAttribute('id', 'chat');

    /** Container body chat --------------------------------------------*/
    const chatBody = document.createElement('div');
    chatBody.classList.add('chat-body');

    /** Container body chat Info -----------------------------------------*/
    const chatInfo = document.createElement('div');
    chatInfo.classList.add('chat__info');

    /** Container footer input -------------------------------------------*/
    const chatInput = document.createElement('div');
    chatInput.classList.add('chat-input')
    
    /* Render SVG´s ------------------------------------------------------*/
    // Chat Glove
    const renderSvgChat = (chat) => {
        const iconSVG = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        const iconPath = document.createElementNS(
            'http://www.w3.org/2000/svg',
            'path'
        );

        iconSVG.setAttribute('width', '30');
        iconSVG.setAttribute('height', '30');
        iconSVG.setAttribute('fill', 'currentColor');
        iconSVG.setAttribute('class', 'bi bi-chat-left-dots-fill');
        iconSVG.setAttribute('viewBox', '0 0 16 16');

        iconPath.setAttribute('d',
         'M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z'
         );

        iconSVG.appendChild(iconPath);
        return chat.appendChild(iconSVG)
    }
    // Chat Header Exit 
    const renderSvgExit = (exit) => {
        const iconSVG = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        const iconPath = document.createElementNS(
            'http://www.w3.org/2000/svg',
            'path'
        );
        const iconPath2 = document.createElementNS(
            'http://www.w3.org/2000/svg',
            'path'
        );

        iconSVG.setAttribute('width', '25');
        iconSVG.setAttribute('height', '25');
        iconSVG.setAttribute('fill', 'currentColor');
        iconSVG.setAttribute('class', 'bi bi-x-circle');
        iconSVG.setAttribute('viewBox', '0 0 16 16');

        iconPath.setAttribute('d',
         'M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'
         );

         iconPath2.setAttribute('d',
         'M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'
         );

        iconSVG.appendChild(iconPath);
        iconSVG.appendChild(iconPath2);
        return exit.appendChild(iconSVG);  
    }
    // Input Send 
    const renderSvgSend = (send) => {
        const iconSVG = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        const iconPath = document.createElementNS(
            'http://www.w3.org/2000/svg',
            'path'
        );

        iconSVG.setAttribute('width', '20');
        iconSVG.setAttribute('height', '20');
        iconSVG.setAttribute('fill', 'currentColor');
        iconSVG.setAttribute('class', 'bi bi-send-fill');
        iconSVG.setAttribute('viewBox', '0 0 16 16');

        iconPath.setAttribute('d',
         'M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z'
         );

        iconSVG.appendChild(iconPath);
        return send.appendChild(iconSVG)
    }
    /** ------------------------------------------------------------------*/

    /* Glove chat --------------------------------------------------------*/
    function renderGloveChat() {
        /* Contendor boton chat */
        // .container__chat .chat__glove
        const chatGlove = document.createElement('div');
        chatGlove.classList.add('container__chat', 'chat__glove');
        // .button_chat_glove
        const bottonChatGlove = document.createElement('div');
        bottonChatGlove.classList.add('button_chat_glove');
        bottonChatGlove.setAttribute('id', 'chatGlove');
        // button chat glove
        const bottonChat = document.createElement('button');
        bottonChat.classList.add('button__chat');

        
        /* AppendChild´s Glove*/
        bottonChatGlove.appendChild(bottonChat);
        chatGlove.appendChild(bottonChatGlove);
        botContainer.appendChild(chatGlove);
        renderSvgChat(bottonChat);

        return;
    }
    /* -------------------------------------------------------------------*/

    /** Header chat ------------------------------------------------------*/
    function chatHeader() {
        const chatHeader = document.createElement('div');
        chatHeader.classList.add('chat-header');

        const logo = document.createElement('div');
        logo.classList.add('logo');
        const logoImg = document.createElement('img');
        logoImg.setAttribute('src', './img/Logo-Iconos/LOGO REFORESTAMOS FONDO TRANSPARENTE.png');
        logoImg.classList.add('p-1');
        logoImg.setAttribute('alt', 'Logo Reforestamos México');
        logo.appendChild(logoImg);
        
        const title = document.createElement('div');
        title.classList.add('title');

        const exit = document.createElement('div');
        exit.classList.add('exit');

        const buttonExit = document.createElement('button');
        buttonExit.classList.add('exit__button');
        buttonExit.setAttribute('id', 'salir');
        renderSvgExit(buttonExit);
        exit.appendChild(buttonExit);

        chatHeader.appendChild(logo);
        chatHeader.appendChild(title);
        chatHeader.appendChild(exit);

        // appendChild chat header
        containerChat.appendChild(chatHeader);
        
        return;
    } 
    /** ------------------------------------------------------------------*/
    
    
    /** Body chat --------------------------------------------------------*/
    function bodyChat() {
        bodyInfo();
        bodyPrincipalOptions();

        // appendChild bodyContainer
        containerChat.appendChild(chatBody)
        return;
    }
    /** ------------------------------------------------------------------*/

    /** Chat Info --------------------------------------------------------*/
    // Body Info
    function bodyInfo() {
        const contendorInfo = document.createElement('div');
        contendorInfo.classList.add('container');
        const rowInfo = document.createElement('div');
        rowInfo.classList.add('row');

        const listaParrafos = ()=> {
            parrafosTitulos.map(parrafoTitulo => {
                const {parrafo} = parrafoTitulo;
                const colInfo = document.createElement('div');
                colInfo.classList.add('col', 'shadow', 'rounded-2');

                const p = document.createElement("p");
                p.classList.add('titulo__info');
                p.textContent = `${parrafo}`;

                colInfo.appendChild(p)
                chatInfo.appendChild(colInfo);
            })
            return;
        }

        listaParrafos(rowInfo);
        contendorInfo.appendChild(chatInfo);
        chatBody.appendChild(contendorInfo);
    }
    /** ------------------------------------------------------------------*/

    /** Chat Principal Option --------------------------------------------*/
    // Body Chat Opciones Principales
    function bodyPrincipalOptions() {
        const opcionesContent = document.createElement('div');
        opcionesContent.classList.add('container', 'lista', 'm-0');

        const rowOpciones = document.createElement('div');
        rowOpciones.classList.add('row', 'justify-content-center');

        opcionesContent.appendChild(rowOpciones);

        const opcionesPrincipales = (f) =>{
            listaOpciones.map(listaOpcion => {
                const {numero, opcion} = listaOpcion;
                
                const colOpciones = document.createElement('div');
                colOpciones.classList.add('col-12', 'w-100', 'px-0');

                const opcionDiv = document.createElement('div');
                opcionDiv.classList.add('opcion-content', 'shadow', 'rounded-2');

                const btnOpcion = document.createElement('p');
                btnOpcion.classList.add(`btn-opcion-${numero}`);
                btnOpcion.textContent = `
                    ${numero}: ${opcion}
                `;

                opcionDiv.appendChild(btnOpcion);
                colOpciones.appendChild(opcionDiv);
                rowOpciones.appendChild(colOpciones);
                return;
            })
            return f;
        }

        opcionesPrincipales(chatBody).scrollIntoView();
        chatInfo.appendChild(opcionesContent);
        
    }

    /** Chat Footer ------------------------------------------------------*/
    // Body Chat Opciones Principales
    function chatFooter() {
        const inputDiv = document.createElement('div');
        inputDiv.classList.add('input-sec');

        // input 
        const inputResponse = document.createElement('input');
        inputResponse.setAttribute('type', 'number');      
        inputResponse.setAttribute('id', 'txtInput');
        inputResponse.setAttribute('maxlength', '3');
        inputResponse.setAttribute('placeholder', 'Escribe un número');
        inputDiv.appendChild(inputResponse);
        
        // .send 
        const sendButton = document.createElement('div');
        sendButton.classList.add('send', 'shadow', 'rounded-2');
        renderSvgSend(sendButton);

        chatInput.appendChild(inputDiv);
        chatInput.appendChild(sendButton);


        containerChat.appendChild(chatInput);
        return; 
    }
    // Footer chat (input)

    function renderChat(){
        chatHeader();
        bodyChat();
        chatFooter();

        // containerChat
        botContainer.appendChild(containerChat);
        return; 
    }

    renderGloveChat();
    renderChat();

    /** animation Glove-Container */
    function animationContainer() {
        const chat = document.querySelector('#chat');
        const salir = document.querySelector('.exit'); 
        const glove = document.querySelector('.chat__glove');
        const options = document.querySelector('.chat__info');
        const displayNone = 'disNo';
        const displayBlock = 'disBlo';
        const none = 'none';
        const block = 'block'

        chat.classList.add(displayNone);
        options.classList.add(displayNone);

    
        
        glove.addEventListener('click', glovechat => {
            const addChat = document.querySelector('#chat');
            glovechat.preventDefault();
            addChat.style.display = block;
            
            if(addChat.style.display = block){
                glove.style.display = none;
            }
    
            setTimeout(()=> {
                options.classList.remove(displayNone);
                options.classList.add(displayBlock);
            },1000)
        })
        
        salir.addEventListener('click', event =>{
            const removeChat = document.querySelector('#chat');
        
            event.preventDefault();
            removeChat.style.display = none;
            
            if (removeChat.style.display = none) {
                glove.style.display = block; 
            } else {
                glove.style.display = none; 
            }
        
        }); 
    }
    animationContainer();

    /** Select Options */
    function selectOptions() {
        const chatBody = document.querySelector('.chat-body');
        const inputValue = document.querySelector('#txtInput');
        const send = document.querySelector('.send');

        //*  Event Listeners */
        // Bloquear el elemento .send si txtInput == ""
        send.addEventListener("click", () => {
            return inputValue.value!=="" 
            ? renderUserMessage() 
            : false;
        });

        
        // Bloquear tecla enter si txt.value == ""
        inputValue.addEventListener("keyup", (event) => {
            return event.keyCode === 13 && inputValue.value!=="" 
            ? renderUserMessage() 
            : false;
        });

        //* Asignar los elementos a imprimir en html */
        const renderMessageEle = (txt, type) => {
            let className = "user-message";
            const messageEle = document.createElement("div");
            const linkMessage = document.createElement('a')
            const txtNode = document.createTextNode(txt);

            if (type !== "user") {
            className = "chatbot-message";
            }
            
            // const fistChildValue = ()=> {
            //     const child = document.querySelector('.chatbot-message');
            //     const childValue = child ? child.value : '';
            //     childValue.text
            //     console.log(childValue)
            // }

            // fistChildValue();

            messageEle.classList.add(className, 'shadow-lg', 'p-2');
            linkMessage.classList.add('text-decoration-none', 'text-white');
            linkMessage.setAttribute('href', '#')

            linkMessage.append(txtNode);
            messageEle.append(linkMessage)
            chatBody.append(messageEle);
        };

        //* Renderizar el mensage del usuario  */
        const renderUserMessage = () => {
            const userInput = inputValue.value;
            renderMessageEle(userInput, "user");
            inputValue.value = "";

            setTimeout(() => {
            renderChatbotResponse(userInput);
            setScrollPosition();
            }, 1000);
        };
        // *** ------------------------------*/

        //* Renderizar el mensaje del "Bot"  */
        const renderChatbotResponse = (userInput) => {
            const listaOpciones = document.querySelector('.lista');
            listaOpciones.classList.add('disNo')
            const res = userInput;


            if(res == 1 || document.querySelector('.btn-opcion-1').addEventListener('click')) {
                renderMessageEle('Voluntariado 🦺');
                listaVoluntariado.map(voluntariado => {
                    const {numero, opcion} = voluntariado;
                    
                    renderMessageEle(`${numero} - ${opcion}`);
                    // console.log(`${numero} - ${opcion}`)
                })
                
            }else if(res == 1.1 ) {
                renderMessageEle('Reforestación corporativa');

                listaVoluntariado.map(voluntariado => {
                    const {numero, opcion} = voluntariado;
                    
                    renderMessageEle(`${numero} - ${opcion}`);
                })
            } else if(res == 2 ) {
                renderMessageEle('Marketing con causa 📱');

                listaMarketing.map(marketing => {
                    const {numero, opcion} = marketing;
                    renderMessageEle(`${numero} - ${opcion}`);
                    console.log(`${numero} - ${opcion}`)
                })
            } else if(res == 3) {
                renderMessageEle('Adopta un árbol 🌱');
                listaAdopta.map(adopta => {
                    const {numero, opcion} = adopta;

                    renderMessageEle(`${numero} - ${opcion}`);
                    console.log(`${numero} - ${opcion}`)
                })
            } else if (res == 4) {
                renderMessageEle('Bolsa de trabajo 👨‍👧');
                listaBolsa.map(bolsa => {
                    const {numero, opcion} = bolsa;
                    renderMessageEle(`${numero} - ${opcion}`);
                    console.log(`${numero} - ${opcion}`)
                })
            } else if (res == 5) {
                renderMessageEle('Centinelas del Tiempo 📷');
                listaCentinelas.map(centinelas => {
                    const {numero, opcion} = centinelas;

                    renderMessageEle(`${numero} - ${opcion}`);
                    console.log(`${numero} - ${opcion}`)
                })

            } else if (res == 6 ) { // ------
                renderMessageEle('Compra y/o venta de árboles 🌳')


            } else if (res == 7 ) { // ------
                renderMessageEle('Donar💰');

                listaDonar.map(donar => {
                    const {numero, opcion} = donar;

                    renderMessageEle(`${numero} - ${opcion}`);
                    console.log(`${numero} - ${opcion}`)
                })
            } else if (res == 8 ) { // ------
                renderMessageEle('Contacto ☎️');

                listaContacto.map(contacto => {
                    const {numero, opcion} = contacto;

                    renderMessageEle(`${numero} - ${opcion}`);
                    console.log(`${numero} - ${opcion}`)
                })
            } else if (res == 9 ) { // ------
                renderMessageEle('Eventos y convocatorias 📝');

                listaEventos.map(eventos => {
                    const {numero, opcion} = eventos;

                    renderMessageEle(`${numero} - ${opcion}`);
                    console.log(`${numero} - ${opcion}`)
                })
            } else {
                renderMessageEle('Ingresa una opcion valida');
            }
        };
        // *** ------------------------------*/

        // Enviar "Ingresa un número" si listaOpciones[userInput] === undefined || false
        // ** Response chat     */ 
        // const getChatbotResponse = (opcion) =>{
        //     // return listaOpciones[opcion] === undefined || false
        //     // ? "Ingresa una opcion valida"
        //     // : listaOpciones.map(item => {
        //     // const divContent = document.createElement('div');
        //     // divContent.classList.add("chatbot-message");

        //     // const {numero, opcion} = item;
                
        //     //  divContent.textContent = `${numero}: ${opcion}`;
        //     //  console.log(item)
        //     //  chatBody.appendChild(divContent);
        //     // })

        //     if(opcion == 1) {
        //         console.log('Uno');
        //     }
        // }

        // *** ------------------------------*/

        //* Scroll del Chat  */ 
        const setScrollPosition = () => {
            if (chatBody.scrollHeight > 0) {
            chatBody.scrollTop = chatBody.scrollHeight;
            }
        };

        // *** ------------------------------*/

    }
    selectOptions()

    // /** Chat Response */
    // function chatResponse() {
    //     const chatBody = document.querySelector(".chat-body");
    //     const txtInput = document.querySelector("#txtInput");
    //     const send = document.querySelector(".send");
        
    //     //*  Event Listeners */
    //     // Bloquear el elemento .send si txtInput == ""
    //     send.addEventListener("click", () => {
    //         return txtInput.value!=="" 
    //         ? renderUserMessage() 
    //         : false;
    //     });

        
    //     // Bloquear tecla enter si txt.value == ""
    //     txtInput.addEventListener("keyup", (event) => {
    //         return event.keyCode === 13 && txtInput.value!=="" 
    //         ? renderUserMessage() 
    //         : false;
    //     });
    //     // *** ------------------------------*/

    //     //* Asignar los elementos a imprimir en html */
    //     const renderMessageEle = (txt, type) => {
    //         let className = "user-message";
    //         const messageEle = document.createElement("div");
    //         const txtNode = document.createTextNode(txt);

    //         if (type !== "user") {
    //         className = "chatbot-message";
    //         }

    //         messageEle.classList.add(className);
    //         messageEle.append(txtNode);
    //         chatBody.append(messageEle);
    //     };
    //     // *** ------------------------------*/
        

    //     //* Renderizar el mensage del usuario  */
    //     const renderUserMessage = () => {
    //         const userInput = txtInput.value;
    //         renderMessageEle(userInput, "user");
    //         txtInput.value = "";

    //         setTimeout(() => {
    //         renderChatbotResponse(userInput);
    //         setScrollPosition();
    //         }, 1000);
    //     };
    //     // *** ------------------------------*/

        
    //     //* Renderizar el mensaje del "Bot"  */
    //     const renderChatbotResponse = (userInput) => {
    //         const res = getChatbotResponse(userInput);
    //         renderMessageEle(res);
    //     };
    //     // *** ------------------------------*/

        
    //     // Enviar "Ingresa un número" si listaOpciones[userInput] === undefined || false
    //     // ** Response chat     */ 
    //     const getChatbotResponse = (userInput) => {
    //         // return listaOpciones[userInput] === undefined || false
    //         // ? "Ingresa un número"
    //         // : listaOpciones[userInput]
            
    //         const numero = listaOpciones.find(listaOpcion => { listaOpcion.numero == userInput});
            
    //         if(numero) {
    //             console.log(listaOpciones);
    //             numero = '';
    //             return console.log(numero);
    //         } else {
    //             listaOpciones.map(listaOpcion => {
    //                 const {opcion} = listaOpcion;
    
    //                 return console.log(opcion);
    //             })
    //         }
    //     };

    //     // *** ------------------------------*/
     
    //     //* Scroll del Chat  */ 
    //     const setScrollPosition = () => {
    //         if (chatBody.scrollHeight > 0) {
    //         chatBody.scrollTop = chatBody.scrollHeight;
    //         }
    //     };
    // }

    // chatResponse();


    const letras = 'Se presenta modelo de diversidad cultural y productiva de los Pueblos Indígenas Otomíes y Zapoteco en la Asamblea General del FSC® en Bali, Indonesia.'
    console.log(`Los caracteres son ${letras.length}`);
})();


