PGDMP                      |            INFOP_Planificacion    16.3    16.3 H               0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    16397    INFOP_Planificacion    DATABASE     �   CREATE DATABASE "INFOP_Planificacion" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Spain.1252';
 %   DROP DATABASE "INFOP_Planificacion";
                postgres    false            �          0    18864    cargos 
   TABLE DATA           D   COPY public.cargos (id, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    222   �C       �          0    18960    componentes 
   TABLE DATA           Q   COPY public.componentes (id, numero, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    235   ED       �          0    18969    lineas_estrategicas 
   TABLE DATA           m   COPY public.lineas_estrategicas (id, id_componente, numero, descripcion, created_at, updated_at) FROM stdin;
    public          postgres    false    237   �D       �          0    18846    tipos_unidades 
   TABLE DATA           L   COPY public.tipos_unidades (id, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    218   �E       �          0    18855    tipos_usuarios 
   TABLE DATA           L   COPY public.tipos_usuarios (id, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    220   F       �          0    18873    users 
   TABLE DATA           �   COPY public.users (id, id_unidad, id_tipo_usuario, id_tipo_unidad, nombre_unidad, nombre, id_cargo, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    224   F       �          0    18983    poas 
   TABLE DATA           o   COPY public.poas (id, id_usuario, anio, id_componente, aceptado, aprobado, created_at, updated_at) FROM stdin;
    public          postgres    false    239   �H       �          0    19019    metas_administrativas 
   TABLE DATA           �   COPY public.metas_administrativas (id, id_poa, id_linea, descripcion, unidad_medida, numero, programacion_anual, presupuesto_meta, created_at, updated_at) FROM stdin;
    public          postgres    false    243   KI                 0    19184    avances_metas_administrativas 
   TABLE DATA           o   COPY public.avances_metas_administrativas (id, id_meta, mes, programacion, created_at, updated_at) FROM stdin;
    public          postgres    false    269   �J       �          0    19000    metas_operativas 
   TABLE DATA           �   COPY public.metas_operativas (id, id_poa, id_linea, descripcion, unidad_medida, numero, cursos, participantes, horas, presupuesto_meta, created_at, updated_at) FROM stdin;
    public          postgres    false    241   K                 0    19172    avances_metas_operativas 
   TABLE DATA           z   COPY public.avances_metas_operativas (id, id_meta, mes, cursos, participantes, horas, created_at, updated_at) FROM stdin;
    public          postgres    false    267   2K       �          0    18916    cache 
   TABLE DATA           7   COPY public.cache (key, value, expiration) FROM stdin;
    public          postgres    false    227   OK       �          0    18923    cache_locks 
   TABLE DATA           =   COPY public.cache_locks (key, owner, expiration) FROM stdin;
    public          postgres    false    228   lK                 0    19210    evidencias_paccs 
   TABLE DATA           Y   COPY public.evidencias_paccs (id, id_poa, evidencia, created_at, updated_at) FROM stdin;
    public          postgres    false    273   �K                 0    19196    evidencias_poas 
   TABLE DATA           X   COPY public.evidencias_poas (id, id_poa, evidencia, created_at, updated_at) FROM stdin;
    public          postgres    false    271   �K       �          0    18948    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    233   �K       �          0    19062    presupuestos 
   TABLE DATA           [   COPY public.presupuestos (id, id_usuario, anio, total, created_at, updated_at) FROM stdin;
    public          postgres    false    249   �K       �          0    19110     presupuestos_maquinarias_equipos 
   TABLE DATA           s   COPY public.presupuestos_maquinarias_equipos (id, id_presupuesto, anio, total, created_at, updated_at) FROM stdin;
    public          postgres    false    257   �K       �          0    19122    renglones_maquinarias_equipos 
   TABLE DATA           h   COPY public.renglones_maquinarias_equipos (id, numero, descripcion, created_at, updated_at) FROM stdin;
    public          postgres    false    259   L       �          0    19129    gastos_maquinarias_equipos 
   TABLE DATA           �   COPY public.gastos_maquinarias_equipos (id, id_presupuesto_me, id_renglon, descripcion, valor, cantidad, created_at, updated_at) FROM stdin;
    public          postgres    false    261   7L       �          0    19146    paccs 
   TABLE DATA           M   COPY public.paccs (id, id_usuario, anio, created_at, updated_at) FROM stdin;
    public          postgres    false    263   TL                  0    19158    gastos_paccs 
   TABLE DATA              COPY public.gastos_paccs (id, id_pacc, renglon, descripcion, monto, unidad, fecha_entrega, created_at, updated_at) FROM stdin;
    public          postgres    false    265   �L       �          0    19074    grupos_presupuestos 
   TABLE DATA           Y   COPY public.grupos_presupuestos (id, numero, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    251   RM       �          0    19081    subgrupos_presupuestos 
   TABLE DATA           f   COPY public.subgrupos_presupuestos (id, id_grupo, numero, nombre, created_at, updated_at) FROM stdin;
    public          postgres    false    253   oM       �          0    19093    gastos_presupuestos 
   TABLE DATA           m   COPY public.gastos_presupuestos (id, id_presupuesto, id_subgrupo, valor, created_at, updated_at) FROM stdin;
    public          postgres    false    255   �M       �          0    18940    job_batches 
   TABLE DATA           �   COPY public.job_batches (id, name, total_jobs, pending_jobs, failed_jobs, failed_job_ids, options, cancelled_at, created_at, finished_at) FROM stdin;
    public          postgres    false    231   �M       �          0    18931    jobs 
   TABLE DATA           c   COPY public.jobs (id, queue, payload, attempts, reserved_at, available_at, created_at) FROM stdin;
    public          postgres    false    230   �M                 0    19250    metas_reportes_administrativos 
   TABLE DATA           �   COPY public.metas_reportes_administrativos (id, id_meta, porcentaje_trimestral, observaciones, created_at, updated_at) FROM stdin;
    public          postgres    false    279   �M                 0    19236    metas_reportes_operativos 
   TABLE DATA           �   COPY public.metas_reportes_operativos (id, id_meta, porcentaje_cursos, porcentaje_participantes, porcentaje_horas, observaciones, created_at, updated_at) FROM stdin;
    public          postgres    false    277    N                 0    19278    notificaciones 
   TABLE DATA           z   COPY public.notificaciones (id, id_usuario, id_remitente, tipo_notificacion, mensaje, created_at, updated_at) FROM stdin;
    public          postgres    false    283   N       �          0    18900    password_reset_tokens 
   TABLE DATA           I   COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
    public          postgres    false    225   :N       �          0    19050    programaciones_administrativas 
   TABLE DATA           p   COPY public.programaciones_administrativas (id, id_meta, mes, programacion, created_at, updated_at) FROM stdin;
    public          postgres    false    247   WN       �          0    19038    programaciones_operativas 
   TABLE DATA           {   COPY public.programaciones_operativas (id, id_meta, mes, cursos, participantes, horas, created_at, updated_at) FROM stdin;
    public          postgres    false    245   �N       
          0    19224    reportes_poas 
   TABLE DATA           V   COPY public.reportes_poas (id, id_poa, trimestre, created_at, updated_at) FROM stdin;
    public          postgres    false    275   �N                 0    19264    reportes_presupuestos 
   TABLE DATA           �   COPY public.reportes_presupuestos (id, id_presupuesto, trimestre, total_ejecutado, total_disponible, observaciones, created_at, updated_at) FROM stdin;
    public          postgres    false    281   �N       �          0    18907    sessions 
   TABLE DATA           _   COPY public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) FROM stdin;
    public          postgres    false    226   O                  0    0 $   avances_metas_administrativas_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.avances_metas_administrativas_id_seq', 1, false);
          public          postgres    false    268                       0    0    avances_metas_operativas_id_seq    SEQUENCE SET     N   SELECT pg_catalog.setval('public.avances_metas_operativas_id_seq', 1, false);
          public          postgres    false    266                       0    0    cargos_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.cargos_id_seq', 3, true);
          public          postgres    false    221                       0    0    componentes_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.componentes_id_seq', 6, true);
          public          postgres    false    234                       0    0    evidencias_paccs_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.evidencias_paccs_id_seq', 1, false);
          public          postgres    false    272                       0    0    evidencias_poas_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.evidencias_poas_id_seq', 1, false);
          public          postgres    false    270                       0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    232                        0    0 !   gastos_maquinarias_equipos_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.gastos_maquinarias_equipos_id_seq', 1, false);
          public          postgres    false    260            !           0    0    gastos_paccs_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.gastos_paccs_id_seq', 1, false);
          public          postgres    false    264            "           0    0    gastos_presupuestos_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.gastos_presupuestos_id_seq', 1, false);
          public          postgres    false    254            #           0    0    grupos_presupuestos_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.grupos_presupuestos_id_seq', 1, false);
          public          postgres    false    250            $           0    0    jobs_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.jobs_id_seq', 1, false);
          public          postgres    false    229            %           0    0    lineas_estrategicas_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.lineas_estrategicas_id_seq', 19, true);
          public          postgres    false    236            &           0    0    metas_administrativas_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.metas_administrativas_id_seq', 7, true);
          public          postgres    false    242            '           0    0    metas_operativas_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.metas_operativas_id_seq', 1, false);
          public          postgres    false    240            (           0    0 %   metas_reportes_administrativos_id_seq    SEQUENCE SET     T   SELECT pg_catalog.setval('public.metas_reportes_administrativos_id_seq', 1, false);
          public          postgres    false    278            )           0    0     metas_reportes_operativos_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.metas_reportes_operativos_id_seq', 1, false);
          public          postgres    false    276            *           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 30, true);
          public          postgres    false    215            +           0    0    notificaciones_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.notificaciones_id_seq', 1, false);
          public          postgres    false    282            ,           0    0    paccs_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.paccs_id_seq', 1, true);
          public          postgres    false    262            -           0    0    poas_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.poas_id_seq', 5, true);
          public          postgres    false    238            .           0    0    presupuestos_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.presupuestos_id_seq', 1, false);
          public          postgres    false    248            /           0    0 '   presupuestos_maquinarias_equipos_id_seq    SEQUENCE SET     V   SELECT pg_catalog.setval('public.presupuestos_maquinarias_equipos_id_seq', 1, false);
          public          postgres    false    256            0           0    0 %   programaciones_administrativas_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.programaciones_administrativas_id_seq', 8, true);
          public          postgres    false    246            1           0    0     programaciones_operativas_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.programaciones_operativas_id_seq', 1, false);
          public          postgres    false    244            2           0    0 $   renglones_maquinarias_equipos_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.renglones_maquinarias_equipos_id_seq', 1, false);
          public          postgres    false    258            3           0    0    reportes_poas_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.reportes_poas_id_seq', 1, false);
          public          postgres    false    274            4           0    0    reportes_presupuestos_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.reportes_presupuestos_id_seq', 1, false);
          public          postgres    false    280            5           0    0    subgrupos_presupuestos_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.subgrupos_presupuestos_id_seq', 1, false);
          public          postgres    false    252            6           0    0    tipos_unidades_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.tipos_unidades_id_seq', 2, true);
          public          postgres    false    217            7           0    0    tipos_usuarios_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.tipos_usuarios_id_seq', 6, true);
          public          postgres    false    219            8           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 14, true);
          public          postgres    false    223            �   Z   x�3��JMKUpI-H,*I�M�+��4202�50�5�T0��20�2��&�e�霟_������_D�.CL��Ӌs�3o�#ڤ=... �U/�      �   �   x�m�1�0Eg��@Q��)d��"��RH$֎��_�-"^������z�ۺ}VC������:G+ѫ|�V%B�CV�^c@�P��m��`��p��9�����,9������.q�>O���0A�      �   �   x�m���0kq�,`C$%[�!M�i���"���qa|����~��E����������	,qO��i�e�����&ܻ�E�Sb�^3F��:�93F��:�Ք��<TC(W���͈����b$)#���u�����Z���,UQ!6��b��zƈ;Du1I�IEg�?;<��T�62F< ��!UL�ws3�	Q]���NDܥ�      �   ;   x�3�tL����,.)J,�,K�4202�50�5�T0��20�2��&�e��_�J��=... Y�      �   m   x�3���LIL�4202�50�5�T0��20�2��&�e�P��^�������G�6cNǔ�̼��"�4���+KMM)-�L$Z�)�kYbN)iV�q�$�e�e&��/F��� ӌJ�      �   p  x�m��r�@���.܆�
�qTD�lZi��pSy�y�y����2ػ�s���:��G  �ia%�ݞ���A�,������W�q!���)���%�gn}��P���on��<m��SQ�N��oE��j~X�������t&���34þУF�1���9���EdZN�%�Q��()��*O�������8{0;ĕ�$�nu�3_@T�L�	�My;{���
G	W�m�V��*A���x4�x�F��m�Yq��[��s�^�כ����n�ȷ��J���Qʊ}	�rdE������\ьt
�+�i��`@ ��庼J�
�/��:���['.��!e�狠�A�yM��1��<�:����f�m*I2԰����H 0hi[hBt� 	�2ow3�~�NU�UL�}^�g^'[yc3�^}�f�	v�c�����9�*?f���������*�IpN?������[i��K%jv!EN}��:�|q,�Yf�[��bD�N� ��B�-���w��	�:�.z�m��&�K	�<�������6qP�����1�ni�G�Ҡ�]7�qÁz��b;�s��* �0L���N�Xpp^����8�|�H����jX      �   <   x�3��4202�4�LB �D��\��@�������� ��)�%D�!vm&&�ĸb���� ��c      �   �  x�}�Mo�0����1��v>����XE��iVf�d��@��K)m7IC0���ˇ���X��	��آ2Ъ�
�������-�f@Q*k@�����h�k�P��,I�Me�m4�Ŗ|�je|P!��Q���y?O��O��&��ב��JT�e)��r9��P���l=��ŊE����G��l-�)��f���#�H��a��kHk�|a��[(��?6���D2�Cde��u2��-d[�%Aɔ��&����	���4���h��T�_�O�'�D}�b=�_���y��)/ �c9:�.�>���:�g�Y�"�5��丷�Bc"�;@��dg��i��%���s���j|N^���6�[�9�8�Kf�w�xs�`�;zŖ;�zi�K�Z��k���}Qo@���            x������ � �      �      x������ � �            x������ � �      �      x������ � �      �      x������ � �            x������ � �            x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �   #   x�3��4202��".#NC#�ʏ���� tM<          �   x�}�Q
�0���Sx]S�����PM������V���,�%?|�G@��ZH	5Eʆ'�@�4sd.c:��e�#�ԧjCw~�Ts��s����h���9]7Y3�`#ˀ��9�U�7ŧ�fA7�h۱7�{rp�'�)h9�ao�/ �V�X��T�n3�����CgeG���pla��
!�U�P%      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �            x������ � �            x������ � �            x������ � �      �      x������ � �      �   J   x�m��� ѳ��4@d��ĵ����>�&%�d������̶��1Òuk��f��=�G0Ö"�Ve���F�"e      �      x������ � �      
      x������ � �            x������ � �      �   �  x��Q˒�0]�W�쮚��0Hu�4�@�z#�` [iA�~����L�Tv��<�^w�������8a:��{p] �n��ե8zsG��N �5e�8�M���:k��������Pyz�<����8O7���du"C�i������9����gaY\�*��I Bp<���d��xu;x%�6�@*�,��J��UCC�P���h��*s�d�xˣs百�K,$�uX�?���Ŀ��O�̣Ή��U�%�z�Qx��Ή��'#�ޡ]qߵ��y�J�J�-��-��TZM*�ű{I%��=�,6o��R�zq�<�p����t���m�-�҆9�@CCS�?��t��|f�sg,{�*�C���}y�Ѐv�_��ED�
��s�o<x��_]���HT%I�T��m�j�n�C��-���Ws���Z����w[���߾<Z�~n�.��Cd�ڍ��Lp�th��I�D���gQR�]f*��?���hs ��&����TC�     