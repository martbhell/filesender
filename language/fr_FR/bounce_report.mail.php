subject: Erreur lors de la délivrance du message

{alternative:plain}

Madame, Monsieur,

Certains de vos destinataires n'ont pas pû reçevoir votre message :

{each:bounces as bounce}
{if:bounce.target_type=="Recipient"}
  - Dépôt #{bounce.target.transfer.id} : destinataire {bounce.target.email} le {datetime:bounce.date}
{endif}{if:bounce.target_type=="Guest"}
  - Invité {bounce.target.email} le {datetime:bounce.date}
{endif}
{endeach}

Vous pourrez trouver plus de détails sur {cfg:site_url}

Cordialement,
{cfg:site_name}

{alternative:html}

<p>
    Madame, Monsieur,
</p>

<p>
    Certains de vos destinataires n'ont pas pû reçevoir votre message :
</p>

<ul>
{each:bounces as bounce}
    <li>
    {if:bounce.target_type=="Recipient"}
        Dépôt #{bounce.target.transfer.id} : destinataire {bounce.target.email} le {datetime:bounce.date}
    {endif}{if:bounce.target_type=="Guest"}
        Invité {bounce.target.email} le {datetime:bounce.date}
    {endif}
    </li>
{endeach}
</ul>

<p>
    Vous pourrez trouver plus de détails sur <a href="{cfg:site_url}">{cfg:site_url}</a>
</p>

<p>
    Cordialement,<br />
    {cfg:site_name}
</p>
