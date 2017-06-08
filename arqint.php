public Transacao criarTransacao(Pedido pedido) throws FalhaComunicaoException {
Mensagem mensagem = new MensagemNovaTransacao (loja, pedido);
Requisicao requisicao = new Requisicao(mensagem);
return requisicao.enviarPara(destino);
}
public Transacao capturar(Transacao transacao, long valor) throws FalhaComunicaoException
{
Mensagem mensagem = new MensagemCaptura(loja, transacao, valor);
Requisicao requisicao = new Requisicao(mensagem);
return requisicao.enviarPara(destino);
}
